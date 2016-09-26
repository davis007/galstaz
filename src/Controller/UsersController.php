<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->loadComponent('Flash');
		//認証
		$this->loadComponent('Auth',[
			'authenticate' => [
				'Form' => [
					'fields' => [
						'username' => 'username',
						'password' => 'password'
					]
				]
			],
			'loginAction' => [
				'controller' => 'Users',
				'action' => 'login'
			]
		]);

	}
	public function beforeFilter(Event $event){
		$this->Auth->allow(['add']);
		// log-Inユーザー判別
		$is = $this->Auth->user();
		if($is['role'] == 'admin'){
			$this->set('is_login','adminでログイン中');
			$this->set('is',$is);
		}else{
			$this->set('is_login','autherでログイン中');
			$this->set('is',$is);
		}
	}
	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$users = $this->paginate($this->Users);

		$this->set(compact('users'));
		$this->set('_serialize', ['users']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$user = $this->Users->get($id, [
			'contain' => []
		]);

		$this->set('user', $user);
		$this->set('_serialize', ['user']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('user'));
		$this->set('_serialize', ['user']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$user = $this->Users->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('user'));
		$this->set('_serialize', ['user']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->request->allowMethod(['post', 'delete']);
		$user = $this->Users->get($id);
		if ($this->Users->delete($user)) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);    // データをセットしてログイン
				return $this->redirect($this->Auth->redirectUrl('/users/hello'));
			} else {
				$this->Flash->error(
					__('ユーザー名とパスワードを確認して下さい'),
					'default',
					[],
					'auth'
				);
			}
		}
	}
	public function hello(){
		$shops = TableRegistry::get('shops')->find()->hydrate(false); // 呼び出したいテーブル名を指定
		$is    = $this->Auth->user();
		$uid   = $is['id'];
		$uus   = $shops->where(['users_id = ' => $uid])->count();
		if((int)$uus === 0){
			// ユーザーIDを元にSHOPデータを検索して存在しなければ制作させる
			$this->set('ent','SHOPデータが存在しません');
		}else{
			$this->set('ent',$uus);
		}

	}
	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}
}

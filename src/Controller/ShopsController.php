<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shops Controller
 *
 * @property \App\Model\Table\ShopsTable $Shops
 */
class ShopsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Preves', 'BuisnessAreas']
        ];
        $shops = $this->paginate($this->Shops);

        $this->set(compact('shops'));
        $this->set('_serialize', ['shops']);
    }

    /**
     * View method
     *
     * @param string|null $id Shop id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shop = $this->Shops->get($id, [
            'contain' => ['Users', 'Preves', 'BuisnessAreas']
        ]);

        $this->set('shop', $shop);
        $this->set('_serialize', ['shop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shop = $this->Shops->newEntity();
        if ($this->request->is('post')) {
            $shop = $this->Shops->patchEntity($shop, $this->request->data);
            if ($this->Shops->save($shop)) {
                $this->Flash->success(__('The shop has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shop could not be saved. Please, try again.'));
            }
        }
        $users = $this->Shops->Users->find('list', ['limit' => 200]);
        $preves = $this->Shops->Preves->find('list', ['limit' => 200]);
        $buisnessAreas = $this->Shops->BuisnessAreas->find('list', ['limit' => 200]);
        $this->set(compact('shop', 'users', 'preves', 'buisnessAreas'));
        $this->set('_serialize', ['shop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shop id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shop = $this->Shops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shop = $this->Shops->patchEntity($shop, $this->request->data);
            if ($this->Shops->save($shop)) {
                $this->Flash->success(__('The shop has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shop could not be saved. Please, try again.'));
            }
        }
        $users = $this->Shops->Users->find('list', ['limit' => 200]);
        $preves = $this->Shops->Preves->find('list', ['limit' => 200]);
        $buisnessAreas = $this->Shops->BuisnessAreas->find('list', ['limit' => 200]);
        $this->set(compact('shop', 'users', 'preves', 'buisnessAreas'));
        $this->set('_serialize', ['shop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shop id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shop = $this->Shops->get($id);
        if ($this->Shops->delete($shop)) {
            $this->Flash->success(__('The shop has been deleted.'));
        } else {
            $this->Flash->error(__('The shop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

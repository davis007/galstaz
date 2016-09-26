<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shops Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Preves
 * @property \Cake\ORM\Association\BelongsTo $BuisnessAreas
 *
 * @method \App\Model\Entity\Shop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shop findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShopsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('shops');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Preves', [
            'foreignKey' => 'pref_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BuisnessAreas', [
            'foreignKey' => 'buisness_areas_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('plan')
            ->requirePresence('plan', 'create')
            ->notEmpty('plan');

        $validator
            ->integer('qjin')
            ->requirePresence('qjin', 'create')
            ->notEmpty('qjin');

        $validator
            ->integer('staff')
            ->requirePresence('staff', 'create')
            ->notEmpty('staff');

        $validator
            ->integer('opt')
            ->requirePresence('opt', 'create')
            ->notEmpty('opt');

        $validator
            ->allowEmpty('client_name');

        $validator
            ->allowEmpty('client_login');

        $validator
            ->requirePresence('client_tel', 'create')
            ->notEmpty('client_tel');

        $validator
            ->requirePresence('client_url', 'create')
            ->notEmpty('client_url');

        $validator
            ->requirePresence('start', 'create')
            ->notEmpty('start');

        $validator
            ->requirePresence('end', 'create')
            ->notEmpty('end');

        $validator
            ->requirePresence('hosoku', 'create')
            ->notEmpty('hosoku');

        $validator
            ->integer('bpid')
            ->requirePresence('bpid', 'create')
            ->notEmpty('bpid');

        $validator
            ->integer('cars')
            ->requirePresence('cars', 'create')
            ->notEmpty('cars');

        $validator
            ->integer('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->integer('cplay')
            ->requirePresence('cplay', 'create')
            ->notEmpty('cplay');

        $validator
            ->requirePresence('kihon', 'create')
            ->notEmpty('kihon');

        $validator
            ->requirePresence('bikou', 'create')
            ->notEmpty('bikou');

        $validator
            ->requirePresence('remarks', 'create')
            ->notEmpty('remarks');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['users_id'], 'Users'));
        $rules->add($rules->existsIn(['pref_id'], 'Preves'));
        $rules->add($rules->existsIn(['buisness_areas_id'], 'BuisnessAreas'));

        return $rules;
    }
}

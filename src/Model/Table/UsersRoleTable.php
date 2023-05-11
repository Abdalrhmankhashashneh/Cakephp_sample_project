<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersRole Model
 *
 * @method \App\Model\Entity\UsersRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersRole|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersRole saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersRole findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersRoleTable extends Table
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

        $this->setTable('users_role');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('role_name')
            ->maxLength('role_name', 50)
            ->requirePresence('role_name', 'create')
            ->notEmptyString('role_name');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmptyDateTime('updated_at');

        return $validator;
    }
}

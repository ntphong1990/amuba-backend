<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * User Model
 *
 */
class UserTable extends Table
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

        $this->table('user');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('userType')
            ->requirePresence('userType', 'create')
            ->notEmpty('userType');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('firstName', 'create')
            ->notEmpty('firstName');

        $validator
            ->requirePresence('lastName', 'create')
            ->notEmpty('lastName');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('avatar', 'create')
            ->notEmpty('avatar');

        $validator
            ->requirePresence('about', 'create')
            ->notEmpty('about');

        $validator
            ->integer('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->integer('recordStatus')
            ->requirePresence('recordStatus', 'create')
            ->notEmpty('recordStatus');

        $validator
            ->requirePresence('facebook', 'create')
            ->notEmpty('facebook');

        $validator
            ->requirePresence('website', 'create')
            ->notEmpty('website');

        $validator
            ->requirePresence('instagam', 'create')
            ->notEmpty('instagam');

        $validator
            ->numeric('longitude')
            ->requirePresence('longitude', 'create')
            ->notEmpty('longitude');

        $validator
            ->numeric('latitude')
            ->requirePresence('latitude', 'create')
            ->notEmpty('latitude');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmpty('updated_at');

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}

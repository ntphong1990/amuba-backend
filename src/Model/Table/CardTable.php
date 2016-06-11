<?php
namespace App\Model\Table;

use App\Model\Entity\Card;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Card Model
 *
 */
class CardTable extends Table
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

        $this->table('card');
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
            ->integer('userId')
            ->requirePresence('userId', 'create')
            ->notEmpty('userId');

        $validator
            ->integer('ownerId')
            ->requirePresence('ownerId', 'create')
            ->notEmpty('ownerId');

        $validator
            ->requirePresence('destination', 'create')
            ->notEmpty('destination');

        $validator
            ->numeric('totalPrice')
            ->requirePresence('totalPrice', 'create')
            ->notEmpty('totalPrice');

        $validator
            ->numeric('feeShiping')
            ->requirePresence('feeShiping', 'create')
            ->notEmpty('feeShiping');

        $validator
            ->requirePresence('note', 'create')
            ->notEmpty('note');

        $validator
            ->dateTime('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmpty('created_at');

        $validator
            ->dateTime('updated_at')
            ->requirePresence('updated_at', 'create')
            ->notEmpty('updated_at');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('recordStatus')
            ->requirePresence('recordStatus', 'create')
            ->notEmpty('recordStatus');

        return $validator;
    }
}

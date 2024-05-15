<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Khachhang Model
 *
 * @method \App\Model\Entity\Khachhang newEmptyEntity()
 * @method \App\Model\Entity\Khachhang newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Khachhang> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Khachhang get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Khachhang findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Khachhang patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Khachhang> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Khachhang|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Khachhang saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Khachhang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Khachhang>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Khachhang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Khachhang> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Khachhang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Khachhang>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Khachhang>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Khachhang> deleteManyOrFail(iterable $entities, array $options = [])
 */
class KhachhangTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('khachhang');
        $this->setDisplayField('ten_KH');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('ten_KH')
            ->maxLength('ten_KH', 100)
            ->requirePresence('ten_KH', 'create')
            ->notEmptyString('ten_KH');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('so_dt')
            ->maxLength('so_dt', 20)
            ->allowEmptyString('so_dt');

        $validator
            ->scalar('dia_chi')
            ->allowEmptyString('dia_chi');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email', 'so_dt'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);

        return $rules;
    }
}

<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nhanvien Model
 *
 * @method \App\Model\Entity\Nhanvien newEmptyEntity()
 * @method \App\Model\Entity\Nhanvien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Nhanvien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nhanvien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Nhanvien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Nhanvien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Nhanvien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nhanvien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Nhanvien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Nhanvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nhanvien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Nhanvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nhanvien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Nhanvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nhanvien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Nhanvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Nhanvien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class NhanvienTable extends Table
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

        $this->setTable('nhanvien');
        $this->setDisplayField('ten_nv');
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
            ->scalar('ten_nv')
            ->maxLength('ten_nv', 100)
            ->requirePresence('ten_nv', 'create')
            ->notEmptyString('ten_nv');

        $validator
            ->email('email')
            ->allowEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['email'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);
        $rules->add($rules->isUnique(['email', 'so_dt'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);

        return $rules;
    }
}

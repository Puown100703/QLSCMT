<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Suachua Model
 *
 * @method \App\Model\Entity\Suachua newEmptyEntity()
 * @method \App\Model\Entity\Suachua newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Suachua> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Suachua get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Suachua findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Suachua patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Suachua> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Suachua|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Suachua saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Suachua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suachua>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Suachua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suachua> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Suachua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suachua>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Suachua>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Suachua> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SuachuaTable extends Table
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

        $this->setTable('suachua');
        $this->setDisplayField('id');
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
            ->integer('id_mayTinh')
            ->allowEmptyString('id_mayTinh');

        $validator
            ->date('ngay_bat_dau')
            ->allowEmptyDate('ngay_bat_dau');

        $validator
            ->date('ngay_ket_thuc')
            ->allowEmptyDate('ngay_ket_thuc');

        $validator
            ->decimal('chi_phi')
            ->allowEmptyString('chi_phi');

        $validator
            ->integer('id_nhanVien')
            ->allowEmptyString('id_nhanVien');

        return $validator;
    }
}

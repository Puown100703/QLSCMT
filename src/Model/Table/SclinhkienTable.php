<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sclinhkien Model
 *
 * @method \App\Model\Entity\Sclinhkien newEmptyEntity()
 * @method \App\Model\Entity\Sclinhkien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Sclinhkien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sclinhkien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Sclinhkien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Sclinhkien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Sclinhkien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sclinhkien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Sclinhkien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Sclinhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sclinhkien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sclinhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sclinhkien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sclinhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sclinhkien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sclinhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sclinhkien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SclinhkienTable extends Table
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

        $this->setTable('sclinhkien');
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
            ->integer('id_sua_chua')
            ->allowEmptyString('id_sua_chua');

        $validator
            ->integer('id_linh_kien')
            ->allowEmptyString('id_linh_kien');

        $validator
            ->integer('so_luong')
            ->allowEmptyString('so_luong');

        return $validator;
    }
}

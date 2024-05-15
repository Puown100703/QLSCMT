<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Linhkien Model
 *
 * @method \App\Model\Entity\Linhkien newEmptyEntity()
 * @method \App\Model\Entity\Linhkien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Linhkien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Linhkien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Linhkien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Linhkien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Linhkien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Linhkien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Linhkien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Linhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Linhkien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Linhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Linhkien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Linhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Linhkien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Linhkien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Linhkien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LinhkienTable extends Table
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

        $this->setTable('linhkien');
        $this->setDisplayField('ten_linh_kien');
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
            ->scalar('ten_linh_kien')
            ->maxLength('ten_linh_kien', 100)
            ->requirePresence('ten_linh_kien', 'create')
            ->notEmptyString('ten_linh_kien');

        $validator
            ->scalar('mo_ta')
            ->allowEmptyString('mo_ta');

        $validator
            ->integer('so_luong')
            ->allowEmptyString('so_luong');

        $validator
            ->decimal('gia')
            ->allowEmptyString('gia');

        return $validator;
    }
}

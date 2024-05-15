<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Maytinh Model
 *
 * @method \App\Model\Entity\Maytinh newEmptyEntity()
 * @method \App\Model\Entity\Maytinh newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Maytinh> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Maytinh get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Maytinh findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Maytinh patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Maytinh> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Maytinh|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Maytinh saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Maytinh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maytinh>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Maytinh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maytinh> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Maytinh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maytinh>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Maytinh>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maytinh> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MaytinhTable extends Table
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

        $this->setTable('maytinh');
        $this->setDisplayField('nhan_hang');
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
            ->scalar('nhan_hang')
            ->maxLength('nhan_hang', 50)
            ->requirePresence('nhan_hang', 'create')
            ->notEmptyString('nhan_hang');

        $validator
            ->scalar('mau_ma')
            ->maxLength('mau_ma', 50)
            ->requirePresence('mau_ma', 'create')
            ->notEmptyString('mau_ma');

        $validator
            ->scalar('so_serial')
            ->maxLength('so_serial', 100)
            ->requirePresence('so_serial', 'create')
            ->notEmptyString('so_serial')
            ->add('so_serial', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('mo_ta')
            ->allowEmptyString('mo_ta');

        $validator
            ->date('ngay_mua')
            ->allowEmptyDate('ngay_mua');

        $validator
            ->date('ngay_het_han_bao_hanh')
            ->allowEmptyDate('ngay_het_han_bao_hanh');

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
        $rules->add($rules->isUnique(['so_serial']), ['errorField' => 'so_serial']);

        return $rules;
    }
}

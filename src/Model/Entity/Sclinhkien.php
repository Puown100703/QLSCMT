<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sclinhkien Entity
 *
 * @property int $id
 * @property int|null $id_sua_chua
 * @property int|null $id_linh_kien
 * @property int|null $so_luong
 */
class Sclinhkien extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'id_sua_chua' => true,
        'id_linh_kien' => true,
        'so_luong' => true,
    ];
}

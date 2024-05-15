<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Linhkien Entity
 *
 * @property int $id
 * @property string $ten_linh_kien
 * @property string|null $mo_ta
 * @property int|null $so_luong
 * @property string|null $gia
 */
class Linhkien extends Entity
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
        'ten_linh_kien' => true,
        'mo_ta' => true,
        'so_luong' => true,
        'gia' => true,
    ];
}

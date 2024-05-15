<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nhanvien Entity
 *
 * @property int $id
 * @property string $ten_nv
 * @property string|null $email
 * @property string|null $so_dt
 * @property string|null $dia_chi
 */
class Nhanvien extends Entity
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
        'ten_nv' => true,
        'email' => true,
        'so_dt' => true,
        'dia_chi' => true,
    ];
}

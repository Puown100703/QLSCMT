<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Suachua Entity
 *
 * @property int $id
 * @property int|null $id_mayTinh
 * @property \Cake\I18n\Date|null $ngay_bat_dau
 * @property \Cake\I18n\Date|null $ngay_ket_thuc
 * @property string|null $chi_phi
 * @property int|null $id_nhanVien
 */
class Suachua extends Entity
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
        'id_mayTinh' => true,
        'ngay_bat_dau' => true,
        'ngay_ket_thuc' => true,
        'chi_phi' => true,
        'id_nhanVien' => true,
    ];
}

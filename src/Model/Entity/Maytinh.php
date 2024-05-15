<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maytinh Entity
 *
 * @property int $id
 * @property string $nhan_hang
 * @property string $mau_ma
 * @property string $so_serial
 * @property string|null $mo_ta
 * @property \Cake\I18n\Date|null $ngay_mua
 * @property \Cake\I18n\Date|null $ngay_het_han_bao_hanh
 */
class Maytinh extends Entity
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
        'nhan_hang' => true,
        'mau_ma' => true,
        'so_serial' => true,
        'mo_ta' => true,
        'ngay_mua' => true,
        'ngay_het_han_bao_hanh' => true,
    ];
}

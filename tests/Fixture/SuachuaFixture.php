<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuachuaFixture
 */
class SuachuaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'suachua';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'id_mayTinh' => 1,
                'ngay_bat_dau' => '2024-05-14',
                'ngay_ket_thuc' => '2024-05-14',
                'chi_phi' => 1.5,
                'id_nhanVien' => 1,
            ],
        ];
        parent::init();
    }
}

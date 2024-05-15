<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaytinhFixture
 */
class MaytinhFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'maytinh';
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
                'nhan_hang' => 'Lorem ipsum dolor sit amet',
                'mau_ma' => 'Lorem ipsum dolor sit amet',
                'so_serial' => 'Lorem ipsum dolor sit amet',
                'mo_ta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ngay_mua' => '2024-05-14',
                'ngay_het_han_bao_hanh' => '2024-05-14',
            ],
        ];
        parent::init();
    }
}

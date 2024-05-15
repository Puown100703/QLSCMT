<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NhanvienTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NhanvienTable Test Case
 */
class NhanvienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NhanvienTable
     */
    protected $Nhanvien;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Nhanvien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Nhanvien') ? [] : ['className' => NhanvienTable::class];
        $this->Nhanvien = $this->getTableLocator()->get('Nhanvien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Nhanvien);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NhanvienTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\NhanvienTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

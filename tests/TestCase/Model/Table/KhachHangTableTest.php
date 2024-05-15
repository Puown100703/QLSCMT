<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhachhangTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhachhangTable Test Case
 */
class KhachhangTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KhachhangTable
     */
    protected $Khachhang;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Khachhang',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Khachhang') ? [] : ['className' => KhachhangTable::class];
        $this->Khachhang = $this->getTableLocator()->get('Khachhang', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Khachhang);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\KhachhangTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\KhachhangTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

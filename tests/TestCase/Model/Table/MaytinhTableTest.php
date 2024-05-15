<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaytinhTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaytinhTable Test Case
 */
class MaytinhTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaytinhTable
     */
    protected $Maytinh;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Maytinh',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Maytinh') ? [] : ['className' => MaytinhTable::class];
        $this->Maytinh = $this->getTableLocator()->get('Maytinh', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Maytinh);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MaytinhTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MaytinhTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

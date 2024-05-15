<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuachuaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuachuaTable Test Case
 */
class SuachuaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuachuaTable
     */
    protected $Suachua;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Suachua',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Suachua') ? [] : ['className' => SuachuaTable::class];
        $this->Suachua = $this->getTableLocator()->get('Suachua', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Suachua);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuachuaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

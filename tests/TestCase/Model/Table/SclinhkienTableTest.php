<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SclinhkienTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SclinhkienTable Test Case
 */
class SclinhkienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SclinhkienTable
     */
    protected $Sclinhkien;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Sclinhkien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sclinhkien') ? [] : ['className' => SclinhkienTable::class];
        $this->Sclinhkien = $this->getTableLocator()->get('Sclinhkien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sclinhkien);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SclinhkienTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

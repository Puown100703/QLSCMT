<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LinhkienTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LinhkienTable Test Case
 */
class LinhkienTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LinhkienTable
     */
    protected $Linhkien;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Linhkien',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Linhkien') ? [] : ['className' => LinhkienTable::class];
        $this->Linhkien = $this->getTableLocator()->get('Linhkien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Linhkien);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LinhkienTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

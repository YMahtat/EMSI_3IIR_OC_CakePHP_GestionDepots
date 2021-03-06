<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentersTable Test Case
 */
class CentersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CentersTable
     */
    public $Centers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.centers',
        'app.users',
        'app.deposits',
        'app.logs',
        'app.domains',
        'app.surveys',
        'app.domains_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Centers') ? [] : ['className' => CentersTable::class];
        $this->Centers = TableRegistry::get('Centers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Centers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

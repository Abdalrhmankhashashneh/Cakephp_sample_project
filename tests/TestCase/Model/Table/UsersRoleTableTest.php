<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersRoleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersRoleTable Test Case
 */
class UsersRoleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersRoleTable
     */
    public $UsersRole;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UsersRole',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UsersRole') ? [] : ['className' => UsersRoleTable::class];
        $this->UsersRole = TableRegistry::getTableLocator()->get('UsersRole', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersRole);

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
}

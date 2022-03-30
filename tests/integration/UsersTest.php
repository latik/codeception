<?php

use Codeception\Test\Unit;

/**
 * @internal
 * @coversNothing
 */
class UsersTest extends Unit
{
    protected IntegrationTester $tester;

    public function testAdminInDb()
    {
        $this->tester->seeInDatabase('users', ['name' => 'admin']);
    }
}

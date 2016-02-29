<?php

use Laravel\Lumen\Testing\DatabaseMigrations;


class UserTest extends \TestCase
{
    use DatabaseMigrations;

    public function testFindByEmail()
    {
        // $this->seeInDatabase('users', ['email' => 'not_user@example.com', 'name' => 'Test user']);
        factory('App\User')->make([
            'name' => 'TestUser',
            'email' => 'test_user@example.com',
        ])->save();
        $user = App\User::findByEmail('test_user@example.com');
        $this->assertEquals($user->name, 'TestUser');
        $user2 = App\User::findByEmail('not_user@example.com');
        $this->assertEquals($user2, null);
    }
}

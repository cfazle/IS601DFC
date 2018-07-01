<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserEmailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEmailVariableContainsCorrectValue(){

        $user = new \App\User;
        $user->setName('Dr. Skylar Ondricka');
        $user->setEmail('nikita.runolfsdottir@example.net');
        $emailVariables = $user->getEmailVariables();
        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'],'Dr. Skylar Ondricka');
        $this->assertEquals($emailVariables['email'],'nikita.runolfsdottir@example.net');
    }
}

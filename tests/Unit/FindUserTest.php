<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class FindUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testName(){

        $user = User::find(23);
        $user->setName('Mr. Donnie Pouros III');
        $this->assertEquals($user->getName(), 'Mr. Donnie Pouros III');
    }
}

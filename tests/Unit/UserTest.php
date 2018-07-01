<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInternalDataType()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType('int', $user->id);
        $this->assertInternalType('string', $user->name);
        $this->assertInternalType('string', $user->email);
    }
}

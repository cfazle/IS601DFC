<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ObjectUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testobject()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInstanceOf('App\User', $user);





    }
}

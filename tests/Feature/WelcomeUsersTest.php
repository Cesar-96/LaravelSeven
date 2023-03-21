<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    function test_it_welcomes_users_with_nickname(){
        $this->get('welcome/pablo/dricko')
            ->assertStatus(200)
            ->assertSee('Welcome Pablo, your nickname is Dricko');
    }

//    function test_it_welcomes_users_without_nickname(){
//        $this->get('saludo/pablo')
//            ->assertStatus(200)
//            ->assertSee('Welcome Pablo, you dont have nickname');
//    }

}

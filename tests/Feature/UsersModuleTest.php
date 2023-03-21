<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    function test_it_loads_the_users_list_page()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);
        $response->assertSee('Usuarios');
    }
    /*

    function test_it_loads_the_users_details_page()
    {
        $response = $this->get('/read/1');

        $response->assertStatus(200);
        $response->assertSee('PABLO');
    }
    */

//    function test_it_loads_the_new_user_page(){
//        $response = $this->get('/posts/create');
//
//        $response->assertStatus(200);
//        $response->assertSee('PABLO');
//    }
}

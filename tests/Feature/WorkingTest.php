<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use MongoDB\Driver\Server;
use Tests\TestCase;

use App\User;
use Mockery;
use Mockery\MockInterface;

class WorkingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_something_can_be_mocked()
    {
//        $this->instance(
//            User::class,
//            Mockery::mock(Service::class,function (MockInterface $mock){
//                $mock->shouldReceive('process')->once();
//            })
//        );

        /*
        $spy = $this->spy(User::class);
        $spy->shouldHaveReceived('process');
        */




        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

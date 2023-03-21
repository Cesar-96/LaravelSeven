<?php

namespace Tests\Feature;

use App\Http\Controllers\PostsController;
use App\User;
use App\Context;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\MockInterface;
use Tests\TestCase;
use App\Http\Controllers\MyController;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    //use RefreshDatabase;

//    public function testExample()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }

//    public function testDashboardSuccess(){
//        $user = factory(User::class)->create();
//        $response = $this->actingAs($user)->get('/admin');
//
//        $response->assertOk();
//    }

//    public function test404Success(){
//        $user = factory(User::class)->create();
//        $response = $this->actingAs($user)->get('/some-fake-url');
//        $response->assertNotFound();
//    }

//    public function testNonAdminAccessUsersList(){
//        $user = factory(User::class)->create();
//        $response = $this->actingAs($user)->get('/admin/users');
//
//        $response->assertStatus(403);
//    }

//    public function testAdminAccessUsersList(){
//        $user = factory(User::class)->create(['role_id'=>1]);
//        $response = $this->actingAs($user)->get('/admin/users');
//
//        $response->assertNotFound();
//    }

//    public function testAdminAccessUsersList(){
//        $user = factory(User::class)->states('admin')->create();
//        $user->roles()->attach(1);
//        $response = $this->actingAs($user)->get('/admin/users');
//
//        $response->assertNotFound();
//    }

//    public function test_a_user_can_connect_to_a_database(){
//
//        $this->mock(User::class,function(MockInterface $mock){
//            $mock->shouldReceive('show')->andReturn(['posts.show'=>'posts']);
//        });
//
//        $res = $this->postJson(route('posts.show'),[
//           'code'=>'dummyCode'
//        ])->assertCreated();
//
//    }

//    public function test_Order(){
//        Bus::fake();
//
//        Bus::assertDispatched(function(User $user) use ($order){
//            return $user->order->id === $order->id;
//        });
//    }

    public function test_example()
    {

        $this->mock(Context::class, function (MockInterface $mock) {
            $mock->shouldReceive('perform')->once();
        });

        app(MyController::class)->execute();
    }

    public function test_example2(){
        $this->mock(Context::class,function(MockInterface $mock){
           $mock->shouldReceive('perform')->once()->andReturn(5);
        });

        $this->get('/my-controller-execute')
            ->assertSee(50);
    }

    public function test_user(){
        $this->mock(User::class,function(MockInterface $mock){
           $mock->shouldReceive('order')->once();
        });

        $this->get('/my-user-order')->assertOk();
    }
}


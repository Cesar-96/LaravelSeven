<?php
use App\User;
use Mockery;

/*
class Database
{
    public function getPersonByID($id)
    {
        // do some stuff in the db to get a person by their ID
        return sql("select * from users where id = $id limit 1;")[0];
    }
}

echo "pablito";
*/

//en vez de usar el objeto en si
$this->instance(User::class,Mockery::mock(User::class,function($mock){
    $mock->shouldReceive('process')->once();
}));


//metodo mock proporciona la clase de caso de prueba de laravel
$this->mock(Service::class, function($mock){
   $mock->shouldReceive('process')->once();
});

//metodo q se usa solo cuando se necesita simular algunos metodos de un objeto
$this->partialMock(User::class, function ($mock) {
    $mock->shouldReceive('process')->once();
});

//Si se desea espiar un objecto, la clase de claso de prueba base de laravel ofrece un spy
$this->spy(User::class, function ($mock) {
    $mock->shouldHaveReceived('process');
});

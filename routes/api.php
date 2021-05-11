<?php

Route::namespace('\App\Api\User\Controller')->group(function (){

    Route::get('/AgoraSim','CustomerController@index');

    Route::group( ['middleware' => ['auth'] ], function (){

        Route::get('/customers',function (){
            return "Exemplo de test na rota da aplicação";
        });
    });

});

Route::get('/login',function (){
    
    echo "<h1>Exemplo de teste na rota da aplicação</h1>";

})->name('login');


Route::namespace('\App\Api\User\Controller')->group(function (){

    Route::get('/AgoraSim','UserController@index');

});

Route::namespace('\Support')->group(function (){

    Route::get('/creditCard','CardSupport@getCard');

});





Route::namespace('\App\Api\Controllers')->group( function (){


    Route::post('/auth/login', 'AuthControllers@login');

    Route::get('/dashboard','ServicesController@index');


    Route::group( ['middleware' => ['apiJwt'] ], function (){



        Route::get('/listUser','UserController@index');
    });

});


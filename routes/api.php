<?php


Route::namespace('\App\Api\Controllers')->group( function (){


    Route::post('/auth/login', 'AuthControllers@login');

    Route::group( ['middleware' => ['apiJwt'] ], function (){

        Route::get('/test','AuthControllers@test');

        Route::get('/listUser','UserController@index');
    });

});

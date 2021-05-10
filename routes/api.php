<?php


Route::namespace('\App\Api\Controllers')->group( function (){


    Route::post('/auth/login', 'AuthControllers@login');

    Route::get('/dashboard','ServicesController@index');

    Route::group( ['middleware' => ['apiJwt'] ], function (){



        Route::get('/listUser','UserController@index');
    });

});

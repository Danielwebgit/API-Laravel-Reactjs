<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('\App\Core\Http\Controllers')->group(function (){

    Route::get('/admin','AuthController@dashboard');
    Route::get('/admin/login','AuthController@showLoginForm')->name('admin.login');
    Route::post('admin/login/do','AuthController@login')->name('admin.login.do');
});

Route::namespace('\App\Api\Customers')->group( function (){

    Route::get('/login',function (){
        return view('auth.login');
    })->name('login');

    Route::group( ['middleware' => ['auth'] ], function (){

            Route::resource('/customer','CustomerController@index');
    });

});



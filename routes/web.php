<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
/*--------------------Front End Routes----------------------*/

Auth::routes();
Route::get('/', function () {
    return view('front-end.index');
});
/*--------------------Front End Routes----------------------*/



/*--------------------Admin Routes----------------------*/

Route::group(['middleware' => 'role:admin','prefix' => 'admin','namespace' => 'Admin'], function () {
    
    Route::get('/', function () {
        return view('layouts.admin.app');
    });
    //for performing crud operation
    Route::resource('category', CategoryController::class);

});

/*--------------------Admin Routes----------------------*/


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


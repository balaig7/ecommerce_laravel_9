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
/*--------------------Front End Routes----------------------*/

Auth::routes();
Route::get('/', function () {
    return view('front-end.index');
});
/*--------------------Front End Routes----------------------*/



/*--------------------Admin Routes----------------------*/

Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
    
});
/*--------------------Admin Routes----------------------*/


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

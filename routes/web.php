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

Route::get('/', 'RegistrationController@index');
Route::get('admin', 'Controller@loginForm');
Route::get('admin/register', 'Controller@reg');
Route::post('admin/register', 'Controller@regForm')->name('register');
Route::post('admin', 'Controller@loginValidation')->name('login');
Route::group(['middleware' => 'prevent-back-history'], function () {
    //Auth::routes();
    Route::get('admin/dashboard', 'Controller@dash');
    Route::get('admin/logout', function () {
        Auth::logout();
        Session::flush();
        return redirect('admin');
    });
});

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  });

  Route::prefix('faciltycenter')->group(function() {
    Route::get('/facilitylogin', 'Auth\FaciltyCenterController@showLoginForm')->name('faciltycenter.login');
    Route::post('/facilitylogin', 'Auth\FaciltyCenterController@login')->name('faciltycenter.login.submit');
    Route::get('/facilityregister', 'Auth\FaciltyRegController@register')->name('faciltycenter.register');
    Route::post('/facilityregister', 'Auth\FaciltyRegController@storeUser')-> name('faciltyreg');
    Route::get('/', 'FacilityController@index')->name('facilty.dashboard');
  });


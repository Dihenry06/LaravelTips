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

/**
 * Verb GET
 */
Route::get('users', 'Form\TestController@listAllUser')->name('users.listAll');
Route::get('user/new','Form\TestController@newUser')->name('users.newUser');
Route::get('user/edit/{user}','Form\TestController@formEditUser')->name('users.formEditUser');
Route::get('user/{id}','Form\TestController@listUser')->name('users.listUser');

/**
 * Verb POST
 */
Route::post('users/store', 'Form\TestController@storeUser')->name('users.store');

/**
 * Verb PUT / Patch
 */
Route::put('user/edit/{user}','Form\TestController@editUser')->name('users.edit');

/**
 * Verb DELETE
 */
Route::delete('');

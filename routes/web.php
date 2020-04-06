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

Route::group(['namespace' => 'Form'], function () {
    /**
     * Verb GET
     */
    Route::get('users', 'TestController@listAllUser')->name('users.listAll');
    Route::get('user/new', 'TestController@newUser')->name('users.newUser');
    Route::get('user/edit/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('user/{id}', 'TestController@listUser')->name('users.listUser');

    /**
     * Verb POST
     */
    Route::post('users/store', 'TestController@storeUser')->name('users.store');

    /**
     * Verb PUT / Patch
     */
    Route::put('user/edit/{user}', 'TestController@editUser')->name('users.edit');

    /**
     * Verb DELETE
     */
    Route::delete('user/erase/{user}', 'TestController@eraseUser')->name('user.erase');

});


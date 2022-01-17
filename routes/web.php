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

Route::prefix('cms/admin')->group(function (){
    Route::view('/login','cms.login')->name('cms.login');
    Route::view('/','cms.dashboard')->name('cms.dashboard');
    Route::view('/admins/','cms.admins.index')->name('admins.index');
    Route::view('/admins/create','cms.admins.create')->name('admins.create');

    Route::view('/base-forms','cms.temp.base-forms');
    Route::view('/default-forms','cms.temp.default-forms');
    Route::view('/bootstrap-datepicker','cms.temp.bootstrap-datepicker');
    Route::view('/bootstrap-timepicker','cms.temp.bootstrap-timepicker');
    Route::view('/bootstrap-select','cms.temp.bootstrap-select');
    Route::view('/bootstrap-switch','cms.temp.bootstrap-switch');

    Route::view('/checkbox','cms.temp.checkbox');
    Route::view('/radio','cms.temp.radio');
    Route::view('/switch','cms.temp.switch');
});

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
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@tampil')->name('dashboard.index');
    Route::resource('setting', 'SettingController');
    Route::resource('skill', 'SkillController');
    Route::resource('menguasai', 'MenguasaiController');
    Route::resource('portfolio', 'PortfolioController');
    Route::get('kontak-pesan','KontakController@kontak')->name('kontak.index');
    // Route::get('logout','LoginController@logout')->name('logout');

    
    });

Route::get('/', 'CompanyController@tampil');
Route::post('/', 'CompanyController@kontak')->name('kontak');


Route::get('/home', 'HomeController@index')->name('home');

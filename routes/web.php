<?php

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

Route::get('/', 'HomeController@landing')->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addmenu/{company_id}', 'ProductController@index')->name('getToAddMenuForm');
Route::post('/addmenu/{company_id}','ProductController@store')->name('postToAddMenuForm');

Route::get('/companyoverview/{company_id}', 'CompanyOverviewController@index');
Route::get('/customermenuoverview', 'CustomerMenuOverview@index');
Route::get('/access-denied', 'HomeController@denied')->name('accessdenied');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

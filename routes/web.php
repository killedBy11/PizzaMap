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
Route::get('/addmenu/{company_id}', 'ProductController@index')->name('getToAddMenuForm')->middleware(['auth', 'checkcompany']);
Route::post('/addmenu/{company_id}','ProductController@store')->name('postToAddMenuForm')->middleware(['auth', 'checkcompany']);


Route::get('/companyoverview/{company_id}', 'CompanyOverviewController@index')->name('companyoverview')->middleware(['auth', 'checkcompany']);

Route::delete('/delete-item/{company_id}/{product_id}', 'CompanyOverviewController@deleteRequest')->middleware(['auth', 'checkcompany']);
Route::get('/menuoverview/{company_id}', 'CustomerMenuOverview@index');

Route::get('/access-denied', 'HomeController@denied')->name('accessdenied');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::get('/search/{searchquery}', 'HomeController@search')->name('search');

//Company edit details
Route::get('/editcompany/{company_id}', 'EditCompany@index')->middleware(['auth', 'checkcompany']);
Route::post('/editcompany/{company_id}', 'EditCompany@editCompany')->middleware(['auth', 'checkcompany']);

Route::post('/add-to-cart/{company_id}/{product_id}', 'CartController@addItem')->middleware('auth');
Route::get('/editmenuitem/{company_id}/{product_id}', 'ProductController@editForm')->middleware(['auth', 'checkcompany']);
Route::post('/editmenuitem/{company_id}/{product_id}', 'ProductController@editSubmit')->middleware(['auth', 'checkcompany']);

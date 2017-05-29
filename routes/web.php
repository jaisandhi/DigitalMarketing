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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/company/allcompanies', 'HomeController@showallcompany')->name('show-company');
//Route::get('/home/user/allusers', 'HomeController@showallusers')->name('show-user');
Route::get('/home/company/add/newcompany','HomeController@addcompany')->name('add-company');
Route::POST('/home/company/store','HomeController@storecompany')->name('store-company');
Route::get('/home/company/{id}/delete','HomeController@removecompany')->name('remove-company');
Route::get('/home/company/{id}/edit','HomeController@editcompany')->name('edit-company');
Route::PUT('/home/company/{id}/update','HomeController@updatecompany')->name('update-company');
Route::get('/home/reports/show', 'HomeController@showallreports')->name('show-reports');
Route::get('/home/reports/{id}/validate','HomeController@validatereports')->name('validate-reports');
Route::get('/home/reports/{id}/notvalidate','HomeController@notvalidatereports')->name('notvalidate-reports');
Route::get('/home/reports/{id}/delete','HomeController@removereport')->name('remove-reports');
Route::get('/home/reports/open_leads', 'HomeController@showopenlead')->name('show-openlead');
Route::get('/home/reports/close_leads', 'HomeController@showcloselead')->name('show-closelead');
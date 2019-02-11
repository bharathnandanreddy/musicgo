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
Auth::routes();
Route::get('/contact','videocontroller@contact');

Route::get('about','PagesController@about');

Route::resource('/video','AdminController');
Route::get('/login','PagesController@login');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/l',function(){return view('auth.login1');});

Route::get('admin/home','AdminController@index')->name('admin-home');

Route::GET('admin-login','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin-login','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('adim-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('search','SearchController@search');
Route::get('searchit','SearchController@searchit');
Route::get('searchadmin','AdminController@search');
Route::get('searchitadmin','AdminController@searchit');
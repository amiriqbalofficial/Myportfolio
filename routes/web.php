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

Route::get('/',function(){
	return view('portfolio/index');
});


// Portfolio Contact form
Route::get('portfolio','PortfolioController@index')->name('portfolio');
Route::post('portfolio','PortfolioController@create');
// view for resume
Route::get('cv','PortfolioController@mycv')->name('resume');


// Dashboard
Route::get('admin','DashboardController@index')->name('admin');
Route::match(['get','post'],'admin-login','DashboardController@login')->name('login');
Route::match(['get','post'],'add-skills','DashboardController@addskills')->name('add-skills');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

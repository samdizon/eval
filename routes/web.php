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
    if(Auth::check())
        return view('/dashboard');
        return view('welcome');
});
Route::get('/settings', function () {
    return view('settings');
})->middleware('auth');

Route::get('/settings/department','DepartmentController@index');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Auth::routes();
Route::post('dashboard', 'DashboardController@updateWizardDisplay');

Route::resource('department', 'DepartmentController');


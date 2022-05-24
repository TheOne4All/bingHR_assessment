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

// Route::get('/', function () {
//     return view('users');
// });

use Illuminate\Support\Facades\Route;
Route::get('/', ['as' => 'employees.index', 'uses' => 'EmployeesController@index']);
Route::get('employees', ['as' => 'employees.index', 'uses' => 'EmployeesController@index']);
Route::post('employees/create', ['as' => 'employees.store', 'uses' => 'EmployeesController@store']);
Route::get('employees/edit/{id}', ['as' => 'employees.edit', 'uses' => 'EmployeesController@edit']);
Route::patch('employees/{id}', ['as' => 'employees.update', 'uses' => 'EmployeesController@update']);
Route::delete('employees/{id}', ['as' => 'employees.destroy', 'uses' => 'EmployeesController@destroy']);
Route::get('employees/{id}', ['as' => 'employees.view', 'uses' => 'EmployeesController@view']);
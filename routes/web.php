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

Route::get('/','StudentManagement@allStudentData');

Route::get('add-student','StudentManagement@addNewStudent');
Route::get('profile/{id}','StudentManagement@studentProfile');
Route::get('home','StudentManagement@allStudentData');
Route::get('delete-student/{id}','StudentManagement@deleteStudent');
Route::get('edit-student/{id}','StudentManagement@editStudent');


Route::post('save','StudentManagement@saveToDatabase');
Route::post('update-student/{id}','StudentManagement@updateDatabase');


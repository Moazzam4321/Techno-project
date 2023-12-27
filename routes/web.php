<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('example-page', function () {
    return view('example-page');
});

Route::get('example-auth', function () {
    return view('example-auth');
});
Route::get('department-index', function () {
    return view('department.index');
});
Route::get('add-department-index', function () {
    return view('department.add');
});
Route::get('semester-index', function () {
    return view('semester.index');
});
Route::get('add-semester-index', function () {
    return view('semester.add');
});
Route::get('course-index', function () {
    return view('course.index');
});
Route::get('add-course-index', function () {
    return view('course.add');
});
Route::get('upload-result-index', function () {
    return view('result.index');
});
Route::get('upload-result', function () {
    return view('result.upload');
});
Route::get('example-auth', function () {
    return view('example-auth');
});
Route::get('example-auth', function () {
    return view('example-auth');
});
Route::get('example-auth', function () {
    return view('example-auth');
});



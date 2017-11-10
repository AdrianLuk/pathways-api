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
    return view('pages.home');
});

Route::get('/add-jobs', function () {
    return view('pages.add-jobs');
});

Route::get('/add-questions', function () {
    return view('pages.add-questions');
});

Route::get('/jobs', function () {
    return view('pages.jobs');
});

Route::get('/questions', function () {
    return view('pages.questions');
});

Route::resource('jobs', 'JobController');

Route::resource('questions', 'QuestionController');

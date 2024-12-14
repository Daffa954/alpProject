<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('login');
});

Route::get('/pendaftaran', function () {
    return view('student-form');
});
Route::get('/login-student', function () {
    return view('student-login');
});
Route::post('/login', function (\Illuminate\Http\Request $request){
    return view('hello', ['data' => $request->all()]);
})->name('login');

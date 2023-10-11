<?php

use Illuminate\Support\Facades\Route;

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
    $class = 'Classe 103';
    $students = [
        'Nome 1',
        'Nome 2',
        'Nome 3'
    ];

    return view('home', [
        'class' => $class,
        'students' => $students,
    ]);
})->name('home');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
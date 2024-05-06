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

Route::get('/home', function () {

    $data = [
        'message'=> 'Hello World',

    ];

    return view('home', $data);
});

Route::get('/about', function () {

    $data = [
        'message'=> 'Benvenuto in about',

    ];

    return view('about', $data);
});

Route::get('/boolean', function () {

    $data = [
        'message'=> 'Ciao Booleaner',

    ];

    return view('boolean', $data);
});
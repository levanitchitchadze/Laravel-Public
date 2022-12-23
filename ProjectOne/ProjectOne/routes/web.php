<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProblemsCont;
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



Route::get('/AboutPage', function () {
    
    return view('Pages/MainPage');
    
});


Route::get('/AboutPage', function () {
    return view('AboutPage');
});

Route::get('/Services', function () {
    return view('Services');
});

Route::get('/Contact', function () {
    return view('Contact');
});


Route::post('/Contact', [ProblemsCont::class ,'AddData']);


Route::get('/Login', function () {
    return view('LoginPage');
});
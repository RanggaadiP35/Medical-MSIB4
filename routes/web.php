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

// ----- Route Landing Page -----
Route::get('/', function () {
    return view('landingPage.home');
});

Route::get('/homePage', function () {
    return view('landingPage.menu');
});

Route::get('/about', function () {
    return view('landingPage.about');
});

Route::get('/survey', function () {
    return view('landingPage.survey');
});

Route::get('/teams', function () {
    return view('landingPage.teams');
});

// Route::get('/', function () {
//     return view('welcome');
// });

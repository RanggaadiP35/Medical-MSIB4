<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\surveyController;
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

Route::resource('survey', surveyController::class);
// Route::get('survey', [surveyController::class, 'create']);
// Route::post('survey', [surveyController::class, 'store'])->name('survey.store');

Route::get('/teams', function () {
    return view('landingPage.teams');
});

// Route::get('/', function () {
//     return view('welcome');
// });

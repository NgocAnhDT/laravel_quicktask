<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TeacherController;

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
    return view('welcome');
});

Route::get('/language/{locale}', [LanguageController::class, 'switchLang'])->name('lang');

Route::resource('speciality', SpecialityController::class);

Route::resource('teacher', TeacherController::class);

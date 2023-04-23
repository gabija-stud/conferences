<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;

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

Route::get('/', 'App\Http\Controllers\ConferenceController@index');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
Route::get('/login', 'UserController@showLoginForm')->name('login');
Route::post('/login', 'UserController@login');
Route::post('/logout', 'UserController@logout')->name('logout');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Film\FilmController;

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

Route::get('/',[AdminController::class,'index'] );

Route::controller(FilmController::class)->group(function(){
    Route::get('/film','index')->name('films');
    Route::get('/film/create', 'create')->name('films.create');
    Route::post('/film/store', 'store')->name('films.store');
    Route::get('/film/destroy/{id}', 'destroy')->name('films.destroy');

});

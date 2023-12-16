<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\API_AuthController;
use App\Http\Controllers\API\API_FilmController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(API\API_AuthController::class)->group(function(){
    Route::post('register', 'register')->name('api.register');
    //Route::post('login', 'login')->name('api.login');
});

Route::middleware('auth:api')->group(function(){

Route::group(['prefix' => 'api'], function () {

    Route::controller(FilmController::class)->group(function(){

    Route::get('/film','api_get_films')->name('api.get.films');
    Route::post('/film/store','api_store')->name('api.films.store');
    Route::post('/film/update','api_update')->name('api.films.update');
    Route::post('/film/destroy','api_destroy')->name('api.films.destroy');

});
});
});




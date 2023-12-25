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

Route::controller(API_AuthController::class)->group(function(){
    Route::post('register', 'register')->name('api.register');
    Route::get('login', 'login')->name('api.login');
});

//Route::middleware('auth:api')->group(function(){

Route::group(['prefix' => 'api'], function () {

    Route::controller(API_FilmController::class)->group(function(){

    Route::get('/film','api_get_films')->name('api.get.films');
    Route::post('/film/store','api_store')->name('api.films.store');
    Route::post('/film/update','api_update')->name('api.films.update');
    Route::post('/film/destroy','api_destroy')->name('api.films.destroy');
    Route::get('/film/show/{id}','show_films')->name('api.films.show');
    Route::post('/film/addtofilmcart','add_to_filmcart')->name('api.films.addtofilmcart');
    Route::post('/film/addcart/{id}','add_cart')->name('api.films.addcart');
    Route::post('/film/deleteitem','delete_filmcart')->name('api.films.deletefilmcart');
    Route::post('film/checkout/{id}','checkout')->name('api.films.checkout');

});
});
//});




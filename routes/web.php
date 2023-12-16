<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Admin\GenerController;
use Spatie\Permission\Models\Role;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::get('/adminlockscreen', function () {
    return view('admin.auth.admin-lock-screen');
})->name('admin.lock');

Route::get('/', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.index');




/*
Route::get('/', function () {
    return view('admin.index');
})->name('admin.index');*/

//Route for Film

Route::group(['middleware'=>['auth', 'role:admin']], function () {


Route::group(['prefix' => 'admin'], function () {

Route::controller(FilmController::class)->group(function(){


    Route::get('/film','get_films')
    ->name('admin.film.index');

    Route::get('/film/create', 'create_film')
    ->name('admin.film.create');

    Route::post('/film/store','store')
    ->name('admin.film.store');

    Route::get('/film/edit/{id}','edit')
    ->name('admin.film.edit');

    Route::patch('/film/update/{id}','update')
    ->name('admin.film.update');
    Route::get('/film/destroy/{id}','destroy')
    ->name('admin.film.destroy');

});

Route::controller(GenerController::class)->group(function(){

    Route::get('/gener','get_gener')
    ->name('admin.gener.index');

    Route::get('/gener/create', 'create')
    ->name('admin.gener.create');

    Route::post('/gener/store','store')
    ->name('admin.gener.store');

    Route::get('/gener/edit/{id}','edit')
    ->name('admin.gener.edit');

    Route::patch('/gener/update/{id}','update')
    ->name('admin.gener.update');

    Route::get('/gener/destroy/{id}','destroy')
    ->name('admin.gener.destroy');
});

});
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

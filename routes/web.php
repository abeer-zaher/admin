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

    Route::get('/film/show','show')
    ->name('admin.film.show');

    Route::get('/film/addtocart/{id}','addToCart')
    ->name('admin.film.add_to_cart');

    Route::get('/film/cart','cart')
    ->name('admin.film.cart');

    Route::get('/film/removefromcart','removefromcart')
    ->name('admin.film.remove');
    Route::get('/film/updatecart','updatecart')
    ->name('admin.film.update_cart');

    Route::get('/film/search','searchbyname')
    ->name('admin.film.search');

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

    Route::get('/film/addimages/{id}','add_images')
    ->name('admin.film.addimages');

    Route::post('/film/store_imgs/{id}','store_imgs')
    ->name('admin.film.store_imgs');


    Route::get('/film/editimg/{id}','edit_img')
    ->name('admin.film.edit_img');

    Route::patch('/film/updateimage/{id}','update_img')
    ->name('admin.film.update_img');

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

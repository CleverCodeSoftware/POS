<?php

use App\Http\Controllers\CategoriaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/inventario/categoria',[CategoriaController::class,'Hola_Jeff']);   

Route::get('/dashboard_login', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/inventario/categoria',[CategoriaController::class,'index']);
// Route::get('/inventario/categoria', 'CategoriaController@index');

// Route::get('/inventario/categoria', [CategoriaController::class, 'index']);

// Route::get('/inventario/categoria', function () {
//     return view ('inventario.categorias.create');
// })->middleware(['auth'])->name('dashboard');
//2021-2-23
Route::get('/',
[CategoriaController::class, 'index']
)->middleware(['auth'])->name('dashboard');


Route::get('/inventario/categoria', function () {
    return view ('inventario.categorias.create');
})->middleware(['auth'])->name('dashboard');

// Route::get('/', [CategoriaController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/',
[CategoriaController::class, 'index']
)->middleware(['auth'])->name('dashboard2');

// Route::resource('/inventario/categoria','CategoriaController');

require __DIR__.'/auth.php';

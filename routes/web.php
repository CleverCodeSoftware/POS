<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
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


// Route::get('/inventario/categoria',[CategoriaController::class,'Hola_Jeff']);   

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
[DashboardController::class, 'index']
)->middleware(['auth'])->name('dashboard');

// Route::get('/inventario/categoria',
// [CategoriaController::class, 'index']
// )->middleware(['auth'])->name('categoria.index');

Route::patch('/inventario/categoria/{categoria}/edit',
[CategoriaController::class,'update'])
->middleware(['auth'])->name('inventario.categoria.update');

Route::resource('/inventario/categoria',CategoriaController::class)
->middleware(['auth']);

// Route::get('/inventario/categoria/{categorium}/edit', 'CategoriaController@edit')
// ->middleware(['auth'])->name('categoria.edit');

// Route::resource('/inventario/categoria', 'CategoriaController')
// ->middleware(['auth']);


// Route::resource('/inventario/categoria',[CategoriaController::class]
// )->middleware(['auth']);

// Route::middleware(['auth'])->group(static function () {
//     Route::resource('/inventario/categoria','CategoriaController');
//     // Route::resource('profile', '\App\Http\Controllers\Admin\ProfileController');
// });



// Route::get('/inventario/categoria', function () {
//     return view ('inventario.categorias.index');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/', [CategoriaController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Route::get('/',
// [CategoriaController::class, 'index']
// )->middleware(['auth'])->name('dashboard2');


require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\articlesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Enviar a la vista articles los datos de la tabla articles
//llamar a la funcion mostrarC del controlador articlesController minetras se le pasa el parametro nArticles del GET

Route::get('/', [articlesController::class, 'mostrarC']);
Route::get('/dashboard', [articlesController::class, 'mostrarArticlesUser']);

require __DIR__.'/auth.php';

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

//trucar a las vistas y controladores
Route::get('/', [articlesController::class, 'mostrarC'], function () {
    return view('welcome');
});

Route::get('/dashboard', [articlesController::class, 'mostrarArticlesUser'], function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Afegir article
Route::get('/articles/create', [articlesController::class, 'create'])->name('articles.create');
Route::post('/articles/create', [articlesController::class, 'store'])->name('articles.store');

//Eliminar article
Route::delete('/articles/{id}', [articlesController::class, 'destroy'])->name('articles.destroy');
//Editar article
Route::get('/articles/{id}', [articlesController::class, 'edit'])->name('articles.edit');
Route::patch('/articles/{id}', [articlesController::class, 'update'])->name('articles.update');

//Google OAUTH
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//driver de Socialite
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

//callback de Google
Route::get('/google-callback', function () {
    //Obtenemos el usuario
    $user = Socialite::driver('google')->user();
 
    //Comprobamos si el usuario ya existe
    $userExists = User::where('google_id', $user->id)->first();

    //Si existe, lo logueamos
    if($userExists){
        Auth::login($userExists);
    }else{
        //Si no existe, lo creamos y logueamos
        $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'google_id' => $user->id,
        ]);
        Auth::login($newUser);
    }

    //Redirigimos a la home
    return redirect('/dashboard');
});

require __DIR__.'/auth.php';
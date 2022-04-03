<?php

use App\Http\Controllers\ProprietaireController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('Accueil');

Route::get('/listeProprietaire', [ProprietaireController::class, 'index'])->name("listeProprietaires");
Route::get('/ajoutProprieaire', [ProprietaireController::class, 'create'])->name("AjoutProprietaire");
Route::post('/ajoutProprieaire', [ProprietaireController::class, 'store'])->name("AjoutProprietaire");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

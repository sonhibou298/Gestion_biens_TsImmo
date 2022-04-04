<?php

use App\Http\Controllers\PaysController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\VilleController;
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
Route::get('/deleteProprietaire/{proprietaire}', [ProprietaireController::class, 'destroy'])->name("SupprimerProprietaire");
Route::get('/editProprietaire', [ProprietaireController::class, 'edit'])->name("modifierProprietaire");

Route::get('listPropriete', [ProprieteController::class, 'index'])->name("listePropriete");
Route::get('addPropriete', [ProprieteController::class, 'create'])->name("ajoutPropriete");
Route::post('addPropriete', [ProprieteController::class, 'store'])->name("ajoutPropriete");
Route::get('deletePropriete/{propriete}', [ProprieteController::class, 'destroy'])->name("supprimerPropriete");

//Route::get('/addPays', [PaysController::class, 'index'])->name("ListePays");
Route::get('/addPays', [PaysController::class, 'create'])->name("ListePays");
Route::post('/addPays', [PaysController::class, 'store'])->name("AjoutPays");
Route::get('/editPays', [PaysController::class, 'edit'])->name("modifierPays");
Route::get('/deletePays/{pays}', [PaysController::class, 'destroy'])->name("SupprimerPays");

Route::get('/listeVille', [VilleController::class, 'index'])->name('listeVille');
Route::get('addVille',[VilleController::class, 'create'])->name('AjoutVille');
Route::post('addVille',[VilleController::class, 'store'])->name('AjoutVille');
Route::get('/editVille', [VilleController::class, 'edit'])->name('ModifierVille');
Route::get('/deleteVille/{ville}', [VilleController::class, 'destroy'])->name('SupprimerVille');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

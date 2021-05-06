<?php

use App\Http\Controllers\CouleurController;
use App\Http\Controllers\VoitureController;
use App\Models\Couleur;
use App\Models\Voiture;
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
    $voitures = Voiture::all();
    $couleurs = Couleur::all();
    return view('home',compact('voitures','couleurs'));
})->name('home');

Route::get('/admin', function () {
    return view('backoffice.main');
})->name('admin');


Route::resource('/admin/voiture', VoitureController::class);

Route::resource('/admin/couleur', CouleurController::class);
<?php

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


$menuLinks = config('menuLinks');
$listInfo = config('listInfo');
$linksComic = config('linksComic');
$listSocial = config('listSocial');
$movieCards = config('comics');
    return view('main', compact('menuLinks','movieCards','listInfo','linksComic','listSocial'));

})->name('homePage');



// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)

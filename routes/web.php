<?php

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
/* passo dei dati dalla sezione config */

Route::get('/', function () {

    $comics = config('comics');
    $infos = config('infos');
    $colonne = config('colonne_footer');
    $socials = config('socials');
    return view('Characters', ['data' => $comics, 'infos' => $infos, 'colonne' => $colonne, 'socials' => $socials]);
})->name('home');

/* creo una route dinamica per ogni fumetto presente nella route home */
Route::get('/fumetto/{index_fumetto}', function ($index_fumetto) {

    /* per far funzionare la pagina devo passare gli stessi data che andranno poi a footer */
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');

    /* riprendo l'array con i dati dei fumetti e lo salvo in una variabile */
    $dettaglio = config('comics');

    /* controllo che il dato riferito all'indice del fumetto sia numerico, positivo e che non sia più grande del conteggio degli elementi dell'array dei fumetti */
    if (is_numeric($index_fumetto) && $index_fumetto >= 0 && count($dettaglio) > $index_fumetto) {

        /* salvo dentro una variabile l'elemento dell'array $dettaglio scelto, grazie all'indice $index_fumetto */
        $fumetto_scelto = $dettaglio[$index_fumetto];

        /* stabilisco la rotta verso il file fumetto passando il numero relativo all'indice del fumetto scelto */
        return view('fumetto', ['array_indice' => $fumetto_scelto, 'colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
    } else {
        /* nel caso in cui l'utente selezioni un fumetto disponibile mostro un messaggio di errore */
        abort(403, 'Fumetto non disponibile');
    }
    /* assegno un nome a questa route */
})->name('fumetto');

Route::get('/comics', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('Comics', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("comics");

Route::get('/movies', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('movies', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("movies");

Route::get('/tv', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('tv', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("tv");

Route::get('/games', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('games', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("games");

Route::get('/collectibles', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('collectibles', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("collectibles");

Route::get('/videos', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('videos', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("videos");

Route::get('/fans', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('fans', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("fans");

Route::get('/news', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('news', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("news");

Route::get('/shop', function () {
    $colonne = config('colonne_footer');
    $infos = config('infos');
    $socials = config('socials');
    return view('shop', ['colonne' => $colonne, 'infos' => $infos, 'socials' => $socials]);
})->name("shop");

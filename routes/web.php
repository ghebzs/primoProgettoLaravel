<?php

use App\Http\Controllers\ArticoloController;
use Illuminate\Support\Facades\Route;

// Rotta messaggio di benvenuto
Route::get('/benvenuto/{id}', function ($id) {
    return 'Benvenut* in Laravel '.$id.'!';
});

// definisce una rotta GET per /articoli e collega la richiesta al metodo
// index del controller ArticoloController
// Assegna un nome univoco alla rotta: articoli.index: questo permette di
// riferirsi alla rotta senza scrivere manualmente l'URL
Route::get('/articoli',[ArticoloController::class, 'index'])->name('articoli.index');

// Rotta per visualizzare un singolo articolo
Route::get('/articolo/{id}',[ArticoloController::class, 'show'])->name('articolo.show');
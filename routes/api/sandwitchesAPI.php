<?php

use App\Http\Controllers\KanapkaController;
use Illuminate\Support\Facades\Route;

Route::controller(KanapkaController::class)->prefix('kanapki')->group(function () {
    Route::get('/', 'index');
    Route::get('/{sandwitch}', 'show');
    Route::get('/search/{name}','search');

    Route::put('/{id}','add_ingredients');
    
    Route::delete('/{id}', 'destroy');

    Route::post('/','store');
});
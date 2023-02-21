<?php

use App\Http\Controllers\KanapkaController;
use Illuminate\Support\Facades\Route;

Route::controller(KanapkaController::class)->prefix('kanapki')->group(function () {
    Route::get('/', 'index');              //pokaż wszystko
    Route::get('/{sandwitch}', 'show');    //szukaj po id
    Route::get('/search/{name}','search'); //szukaj po nazwie

    Route::put('/{id}','add_ingredients');
    
    Route::delete('/{id}', 'destroy');

    Route::post('/','store');
});
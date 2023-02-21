<?php

use App\Http\Controllers\PieczywoController;
use Illuminate\Support\Facades\Route;

Route::controller(PieczywoController::class)->prefix('pieczywo')->group(function () {
    Route::get('/', 'index');              //pokaż wszystko
    Route::get('/{chleb}', 'show');        //szukaj po id
    Route::get('/search/{name}','search'); //szukaj po nazwie

    Route::delete('/{id}', 'destroy');

    Route::post('/','store');
});
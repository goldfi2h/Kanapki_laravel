<?php

use App\Http\Controllers\SkladnikController;
use Illuminate\Support\Facades\Route;


Route::controller(SkladnikController::class)->prefix('skladniki')->group(function () {
    Route::get('/', 'index');              //pokaż wszystko
    Route::get('/{ingredient}', 'show');   //szukaj po id
    Route::get('/search/{name}','search'); //szukaj po nazwie

    Route::delete('/{id}', 'destroy');
    
    Route::post('/','store');
});
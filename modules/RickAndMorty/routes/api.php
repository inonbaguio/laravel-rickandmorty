<?php

use Illuminate\Support\Facades\Route;
use Modules\RickAndMorty\src\Controller\RickAndMortyController;

Route::prefix('rickandmorty')->group(function () {
    Route::get('/', [RickAndMortyController::class, 'index']);
});

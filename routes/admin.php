<?php

use App\Http\Controllers\admin\AlimentController;
use App\Http\Controllers\admin\AnimalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\NutrimentController;
use App\Http\Controllers\admin\RaceController;

Route::middleware('auth')->group(function () {
    Route::prefix('administration')->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::resource('/aliments', AlimentController::class);
        Route::resource('/races', RaceController::class);
        Route::resource('/nutriments', NutrimentController::class);
        Route::resource('/animaux', AnimalController::class);
    });
});

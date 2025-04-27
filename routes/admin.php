<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\RaceController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AnimalController;
use App\Http\Controllers\admin\AlimentController;
use App\Http\Controllers\admin\NiveauMaturiteController;
use App\Http\Controllers\admin\NutrimentController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('administration')->group(function () {
        Route::get('/', [HomeController::class, 'index']);
        Route::resource('/aliments', AlimentController::class);
        Route::resource('/races', RaceController::class);
        Route::resource('/nutriments', NutrimentController::class);
        Route::resource('/animaux', AnimalController::class);
        Route::resource('animaux.niveau-maturite', NiveauMaturiteController::class)->except(['index', 'destroy', 'show'])->shallow();
        Route::resource('/users', UserController::class);
    });
});

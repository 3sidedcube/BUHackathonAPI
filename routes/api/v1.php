<?php

use App\Http\Controllers\Impact\CalculateFoodImpactController;
use App\Http\Controllers\Impact\CalculateHouseholdImpactController;
use App\Http\Controllers\Impact\CalculateTravelImpactController;
use Illuminate\Support\Facades\Route;

Route::post('/impact/food', CalculateFoodImpactController::class)->name('impact.food');
Route::post('/impact/household', CalculateHouseholdImpactController::class)->name('impact.household');
Route::post('/impact/travel', CalculateTravelImpactController::class)->name('impact.travel');

<?php

use App\Http\Controllers\Impact\CalculateFoodImpactController;
use App\Http\Controllers\Impact\CalculateHouseholdImpactController;
use App\Http\Controllers\Impact\CalculateTravelImpactController;
use Illuminate\Support\Facades\Route;

Route::get('/impact/food', CalculateFoodImpactController::class)->name('impact.food');
Route::get('/impact/household', CalculateHouseholdImpactController::class)->name('impact.household');
Route::get('/impact/travel', CalculateTravelImpactController::class)->name('impact.travel');

<?php

use App\Http\Controllers\Household\CalculateHouseholdCO2Controller;
use App\Http\Controllers\Travel\CalculateTravelCO2Controller;
use Illuminate\Support\Facades\Route;

Route::post('/co2/household', CalculateHouseholdCO2Controller::class);
Route::post('/co2/travel', CalculateTravelCO2Controller::class);

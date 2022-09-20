<?php

namespace App\Http\Controllers\Impact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Impact\CalculateFoodImpactRequest;
use App\Http\Resources\Impact\FoodImpactResponse;

class CalculateFoodImpactController extends Controller
{
    public function __invoke(CalculateFoodImpactRequest $request)
    {
        // Each value will be a number between 0 and 4 (0 = 0%, 1 = 25%, 2 = 50%, 3 = 75%, 4 = 100%)
        $organicAmount = $request->input('organic_amount') ?? 0;
        $meatAmount = $request->input('meat_amount') ?? 0;
        $locallyProducedAmount = $request->input('locally_produced_amount') ?? 0;

        // Get rough estimates of emissions for each category (x1000 to get kg)
        $organicEmissions = round(0.25 * (3 - $organicAmount), 2) * 1000;
        $meatEmissions = round(0.25 * (3 - $meatAmount), 2) * 1000;
        $locallyProducedEmissions = round(0.1 * (3 - $locallyProducedAmount), 2) * 1000;

        // Return JSON response with CO2 values
        return new FoodImpactResponse((object) [
            'organicEmissions' => $organicEmissions,
            'meatEmissions' => $meatEmissions,
            'locallyProducedEmissions' => $locallyProducedEmissions,
        ]);
    }
}

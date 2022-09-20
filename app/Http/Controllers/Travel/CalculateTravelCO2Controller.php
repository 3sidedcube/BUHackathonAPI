<?php

namespace App\Http\Controllers\Travel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Travel\CalculateTravelCO2Request;
use App\Http\Resources\Travel\TravelCO2Response;

class CalculateTravelCO2Controller extends Controller
{
    public function __invoke(CalculateTravelCO2Request $request)
    {
        // Set values to zero if they aren't defined
        $trainDistance = $request->input('train.distance') ?? 0;
        $carDistance = $request->input('car.distance') ?? 0;
        $busDistance = $request->input('bus.distance') ?? 0;
        $planeDistance = $request->input('plane.distance') ?? 0;

        // Calculate CO2 for each transport type
        $trainCO2 = round($trainDistance * 0.05945, 2);
        $carCO2 = round($carDistance * 0.13842, 2);
        $busCO2 = round($busDistance * 0.40369, 2);
        $planeCO2 = round($planeDistance * 24.0404, 2);

        // Return JSON response with CO2 values
        return new TravelCO2Response((object) [
            'trainDistance' => $trainDistance,
            'carDistance' => $carDistance,
            'busDistance' => $busDistance,
            'planeDistance' => $planeDistance,
            'trainCO2' => $trainCO2,
            'carCO2' => $carCO2,
            'busCO2' => $busCO2,
            'planeCO2' => $planeCO2,
            'totalCO2' => $trainCO2 + $carCO2 + $busCO2 + $planeCO2,
        ]);
    }
}

<?php

namespace App\Http\Controllers\Household;

use App\Http\Controllers\Controller;
use App\Http\Requests\Household\CalculateHouseholdCO2Request;
use App\Http\Resources\Household\HouseholdCO2Response;

class CalculateHouseholdCO2Controller extends Controller
{
    public function __invoke(CalculateHouseholdCO2Request $request)
    {
        // Set values to UK averages if they aren't defined
        $occupants = $request->input('occupants'); // Is required, so no default value
        $energyUsage = $request->input('energy_usage') ?? 3100 * ($occupants / 2); // in KWh (source: https://www.energy-uk.org.uk/energy-industry/watt-powers.html)
        $gasUsage = $request->input('gas_usage') ?? 12000 * ($occupants / 2); // in KWh (source: https://selectra.co.uk/energy/guides/consumption/average-consumption-uk)

        // CO2 emissions factor for electricity = 0.309 kg / kWh
        $energyEmissions = round($energyUsage * 0.309, 2);

        // CO2 emissions factor for gas = 0.203 kg / kWh
        $gasEmissions = round($gasUsage * 0.203, 2);

        // Return JSON response with CO2 values
        return new HouseholdCO2Response((object) [
            'occupants' => $occupants,
            'energy' => (object) [
                'usage' => $energyUsage,
                'emissions' => $energyEmissions,
            ],
            'gas' => (object) [
                'usage' => $gasUsage,
                'emissions' => $gasEmissions,
            ],
        ]);
    }
}

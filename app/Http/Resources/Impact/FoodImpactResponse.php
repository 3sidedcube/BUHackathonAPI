<?php

namespace App\Http\Resources\Impact;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodImpactResponse extends JsonResource
{
    public function toArray($request)
    {
        return [
            'type' => 'FoodImpactResponse',
            'attributes' => [
                'organic_food' => [
                    'emissions' => $this->organicEmissions,
                ],
                'meat' => [
                    'emissions' => $this->meatEmissions,
                ],
                'locally_produced' => [
                    'emissions' => $this->locallyProducedEmissions,
                ],
                'total_emissions' => round($this->organicEmissions + $this->meatEmissions + $this->locallyProducedEmissions + $this->wasteEmissions, 2),
            ],
        ];
    }
}

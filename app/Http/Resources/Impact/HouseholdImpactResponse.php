<?php

namespace App\Http\Resources\Impact;

use Illuminate\Http\Resources\Json\JsonResource;

class HouseholdImpactResponse extends JsonResource
{
    public function toArray($request)
    {
        return [
            'type' => 'HouseholdImpactResponse',
            'attributes' => [
                'occupants' => $this->occupants,
                'energy' => [
                    'usage' => $this->energy->usage,
                    'emissions' => $this->energy->emissions,
                ],
                'gas' => [
                    'usage' => $this->gas->usage,
                    'emissions' => $this->gas->emissions,
                ],
                'total_emissions' => round($this->energy->emissions + $this->gas->emissions, 2),
            ],
        ];
    }
}

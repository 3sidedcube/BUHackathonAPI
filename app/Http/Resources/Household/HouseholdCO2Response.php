<?php

namespace App\Http\Resources\Household;

use Illuminate\Http\Resources\Json\JsonResource;

class HouseholdCO2Response extends JsonResource
{
    public function toArray($request)
    {
        return [
            'type' => 'HouseholdCO2Response',
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
                'total' => round($this->energy->emissions + $this->gas->emissions, 2),
            ],
        ];
    }
}

<?php

namespace App\Http\Resources\Travel;

use Illuminate\Http\Resources\Json\JsonResource;

class TravelCO2Response extends JsonResource
{
    public function toArray($request)
    {
        return [
            'type' => 'TravelCO2Response',
            'attributes' => [
                'train' => [
                    'distance' => $this->trainDistance,
                    'co2' => $this->trainCO2,
                ],
                'car' => [
                    'distance' => $this->carDistance,
                    'co2' => $this->carCO2,
                ],
                'bus' => [
                    'distance' => $this->busDistance,
                    'co2' => $this->busCO2,
                ],
                'plane' => [
                    'distance' => $this->planeDistance,
                    'co2' => $this->planeCO2,
                ],
                'total' => $this->totalCO2,
            ],
        ];
    }
}

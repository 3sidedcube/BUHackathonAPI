<?php

namespace App\Http\Requests\Travel;

use Illuminate\Foundation\Http\FormRequest;

class CalculateTravelCO2Request extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'train.distance' => 'nullable|numeric',
            'car.distance' => 'nullable|numeric',
            'bus.distance' => 'nullable|numeric',
            'plane.distance' => 'nullable|numeric',
        ];
    }
}

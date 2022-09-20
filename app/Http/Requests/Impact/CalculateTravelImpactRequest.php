<?php

namespace App\Http\Requests\Impact;

use Illuminate\Foundation\Http\FormRequest;

class CalculateTravelImpactRequest extends FormRequest
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

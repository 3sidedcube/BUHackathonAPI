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
            'trainDistance' => 'nullable|numeric',
            'carDistance' => 'nullable|numeric',
            'busDistance' => 'nullable|numeric',
            'planeDistance' => 'nullable|numeric',
        ];
    }
}

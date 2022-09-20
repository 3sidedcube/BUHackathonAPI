<?php

namespace App\Http\Requests\Impact;

use Illuminate\Foundation\Http\FormRequest;

class CalculateFoodImpactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'organicAmount' => 'nullable|numeric|between:0,4',
            'meatAmount' => 'nullable|numeric|between:0,4',
            'locallyProducedAmount' => 'nullable|numeric|between:0,4',
        ];
    }
}

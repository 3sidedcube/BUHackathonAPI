<?php

namespace App\Http\Requests\Household;

use Illuminate\Foundation\Http\FormRequest;

class CalculateHouseholdCO2Request extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'occupants' => 'required|numeric',
            'energy_usage' => 'nullable|numeric',
            'gas_usage' => 'nullable|numeric',
            'number_of_cars' => 'nullable|numeric',
        ];
    }
}

<?php

namespace App\Http\Requests\Impact;

use Illuminate\Foundation\Http\FormRequest;

class CalculateHouseholdImpactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'occupants' => 'required|numeric',
            'energyUsage' => 'nullable|numeric',
            'gasUsage' => 'nullable|numeric',
        ];
    }
}

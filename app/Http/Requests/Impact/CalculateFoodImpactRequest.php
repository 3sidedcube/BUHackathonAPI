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
            'organic_amount' => 'nullable|numeric|between:0,4',
            'meat_amount' => 'nullable|numeric|between:0,4',
            'locally_produced_amount' => 'nullable|numeric|between:0,4',
        ];
    }
}

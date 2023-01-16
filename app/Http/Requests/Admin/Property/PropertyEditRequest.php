<?php

namespace App\Http\Requests\Admin\Property;

use Illuminate\Foundation\Http\FormRequest;

class PropertyEditRequest extends PropertyCreateRequest
{
    public function rules()
    {
        return [
            'property_type' => 'required|numeric',
            'quarter' => 'required|numeric',
            'name' => 'required|string|max:50',
            'starting_price' => 'required|numeric',
            'price_per_m2' => 'required|numeric',
            'an_initial_fee' => 'required|numeric',
            'about' => 'required|string',
        ];
    }
}

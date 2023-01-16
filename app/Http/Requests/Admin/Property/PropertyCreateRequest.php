<?php

namespace App\Http\Requests\Admin\Property;

use Illuminate\Foundation\Http\FormRequest;

class PropertyCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'property_type' => 'required|numeric',
            'quarter' => 'required|numeric',
            'name' => 'required|string|max:50',
            'company_logo' => 'required|image|mimes:jpg,jpeg,png',
            'starting_price' => 'required|numeric',
            'price_per_m2' => 'required|numeric',
            'an_initial_fee' => 'required|numeric',
            'about' => 'required|string',
        ];
    }
}


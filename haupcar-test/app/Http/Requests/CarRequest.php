<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'brand' => 'required|max:255',
            'model' => 'required',
            'year' => 'required|integer',
            'vin' => 'required',
            'engine_number' => 'nullable',
            'license_plate' => 'nullable',
            'color' => 'nullable|string',
            'mileage' => 'nullable|integer',
            'note' => 'nullable',
        ];
    }
}



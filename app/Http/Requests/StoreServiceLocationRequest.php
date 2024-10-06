<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceLocationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'address' => 'required|string|max:255',
            'location' => 'required|array', // Ensure location is an array
            'location.0' => 'required|numeric', // Latitude
            'location.1' => 'required|numeric', // Longitude
            'locname' => 'required|string|max:255',
        ];
    }
}


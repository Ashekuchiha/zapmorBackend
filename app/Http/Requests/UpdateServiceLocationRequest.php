<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceLocationRequest extends FormRequest
{
    public function rules()
    {
        return [
            'address' => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|array',
            'location.0' => 'required|numeric',
            'location.1' => 'required|numeric',
            'locname' => 'sometimes|required|string|max:255',
        ];
    }
}

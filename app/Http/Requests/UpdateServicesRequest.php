<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicesRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'featured' => 'sometimes|required|boolean',
            'icon' => 'nullable|file|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}

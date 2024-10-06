<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicesRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'featured' => 'required|boolean',
            'icon' => 'required|file|mimes:png,jpg,jpeg|max:2048', // Max size 2MB
        ];
    }

}

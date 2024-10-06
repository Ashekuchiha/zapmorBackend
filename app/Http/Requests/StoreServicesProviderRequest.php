<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicesProviderRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users for now
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:services_providers,email',
            'phnnumber' => 'required|string|max:15',
            'profileImage' => 'required|file|mimes:jpg,png,jpeg|max:2048', // image validation
            'password' => 'required|string|min:8',
            'location' => 'required|array',
            'location.*' => 'required|string',
            'experience' => 'required|integer',
            'specialization' => 'required|string',
            'status' => 'required|string',
            'service' => 'required|string',
            'certificate' => 'required|file|mimes:jpg,png,jpeg,pdf|max:2048', // file validation
        ];
    }
}

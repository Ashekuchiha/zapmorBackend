<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServicesProviderRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users for now
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:services_providers,email,' . $this->route('services_provider'),
            'phnnumber' => 'required|string|max:15',
            'profileImage' => 'nullable|file|mimes:jpg,png,jpeg|max:2048', // image validation
            'password' => 'nullable|string|min:8',
            'location' => 'required|array',
            'location.*' => 'required|string',
            'experience' => 'required|integer',
            'specialization' => 'required|string',
            'status' => 'required|string',
            'service' => 'required|string',
            'certificate' => 'nullable|file|mimes:jpg,png,jpeg,pdf|max:2048', // file validation
        ];
    }
}

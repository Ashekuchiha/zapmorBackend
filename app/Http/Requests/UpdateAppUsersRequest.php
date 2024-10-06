<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppUsersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:app_users,email,' . $this->route('app_users'),
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}

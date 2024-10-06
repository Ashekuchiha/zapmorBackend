<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AppUsers extends Authenticatable
{
    use HasFactory;

    protected $table = 'app_users'; // Specify the table name

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
        'profile',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

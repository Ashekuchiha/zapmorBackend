<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phnnumber',
        'profileImage',
        'password',
        'location',
        'experience',
        'specialization',
        'status',
        'service',
        'certificate',
    ];

    protected $casts = [
        'location' => 'array', // JSON array for location
    ];
}

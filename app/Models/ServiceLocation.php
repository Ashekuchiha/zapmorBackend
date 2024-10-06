<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'location',
        'locname',
    ];

    protected $casts = [
        'location' => 'array', // Cast location as array
    ];
}

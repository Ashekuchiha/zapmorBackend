<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionSetup extends Model
{
    use HasFactory;

    protected $table = 'commission_setups'; // Specify the table name

    protected $fillable = [
        'amount',
        'service',
        'type',
    ];
}

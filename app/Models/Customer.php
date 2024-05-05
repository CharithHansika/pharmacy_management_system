<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'address',
        'mobile',
        // Other customer fields
        'remember_token', // Add this line
    ];

    use HasFactory;
}

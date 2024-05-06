<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'price',
        // Other customer fields
        'remember_token', // Add this line
    ];
    
    
    
    use HasFactory;
}

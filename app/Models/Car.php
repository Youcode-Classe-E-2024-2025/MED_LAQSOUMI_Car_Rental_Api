<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'name',
        'brand',
        'model',
        'year',
        'color',
        'seats',
        'price_per_day',
        'available',
    ];

    protected $casts = [
        'year' => 'integer',
        'seats' => 'integer',
        'price_per_day' => 'decimal:2',
        'available' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}

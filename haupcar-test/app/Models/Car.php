<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'vin',
        'engine_number',
        'license_plate',
        'color',
        'mileage'
    ];
}

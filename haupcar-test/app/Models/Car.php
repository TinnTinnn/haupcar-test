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
        'note',
        'mileage'
    ];

    public function toggleAvailable() {
        $this->status = !$this->status;
        $this->save();
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create($data): Car
    {
        $car = new Car();
        $car->fill($data);
        $car->save();

        return $car;
    }
}

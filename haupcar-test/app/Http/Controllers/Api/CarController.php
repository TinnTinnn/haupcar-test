<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::paginate(8);
        return CarResource::collection($cars);
    }

    public function store(Request $request)
    {
        $car = Car::create([
            ...$request->validate([
                'brand' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'year' => 'required|integer',
                'vin' => 'required|string|max:255',
                'engine_number' => 'required|string|max:255',
                'license_plate' => 'nullable|string|max:255',
                'color' => 'nullable|string|max:255',
                'mileage' => 'nullable|integer',
                'note' => 'nullable|string',
                'status' => 'required|boolean',
            ]),
        ]);

        return new CarResource($car);
    }

    public function show(Car $car)
    {
        return new CarResource($car);
    }

    public function update(Request $request, Car $car)
    {
        $car->update(
            $request->validate([
                'brand' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'year' => 'required|integer',
                'vin' => 'required|string|max:255',
                'engine_number' => 'required|string|max:255',
                'license_plate' => 'nullable|string|max:255',
                'color' => 'nullable|string|max:255',
                'mileage' => 'nullable|integer',
                'note' => 'nullable|string',
                'status' => 'required|boolean',
            ])
        );

        return new CarResource($car);
    }
    public function destroy(Car $car)
    {
        $car->delete();

        return response()->json(status: 204);
    }

//    public function toggleAvailable($id)
//    {
//        $car = Car::find($id);
//
//        if (!$car) {
//            return response()->json(['error' => 'Car not found'], Response::HTTP_NOT_FOUND);
//        }
//
//        $car->status = !$car->status;
//        $car->save();
//
//        return response()->json($car, Response::HTTP_OK);
//    }
}

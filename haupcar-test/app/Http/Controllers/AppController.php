<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{
    public function index(): View
    {
        $cars = Car::latest()->paginate(10);;
        return view('cars.index', compact('cars'));
    }

    public function create(): View
    {
        return view('create');
    }

    public function store(CarRequest $request)
    {
        $car = Car::create($request->validated());

        return redirect()->route('cars.show', ['car' => $car->id])
            ->with('success', 'Car created successfully.');
    }

    public function show(Car $car): View
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car): View
    {
        return view('cars.edit', compact('car'));
    }

    public function update(CarRequest $request, Car $car)
    {
        $car->update($request->validated());

        return redirect()->route('cars.show', ['car' => $car->id])
            ->with('success', 'Car updated successfully.');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('cars.index')
            ->with('success', 'Car deleted successfully!');
    }

    public function toggleComplete(Car $car)
    {
        $car->toggleComplete();

        return redirect()->back()->with('success', 'Car status updated successfully!');
    }
}

@extends('layouts.app')

@section('title', isset($car) ? 'Edit Car': 'Add Car')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
    <div class="container-md my-4">
        <form method="POST"
              action="{{ isset($car) ? route('cars.update', ['car' => $car->id]) : route('cars.store') }}">
            @csrf
            @isset($car)
                @method('PUT')
            @endisset
            <div class="mb-4">
                <label for="brand" class="d-block text-uppercase text-secondary mb-2">
                    Brand :
                </label>
                <input type="text" name="brand" id="brand" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('brand') ? 'border-danger' : '' }}"
                       value="{{ $car->brand ?? old('brand') }}"/>
                @error('brand')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="model" class="d-block text-uppercase text-secondary mb-2">
                    Model :
                </label>
                <input type="text" name="model" id="brand" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('model') ? 'border-danger' : '' }}"
                       value="{{ $car->model ?? old('model') }}"/>
                @error('model')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="d-block text-uppercase text-secondary mb-2">
                    Year :
                </label>
                <input type="text" name="year" id="year" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('year') ? 'border-danger' : '' }}"
                       value="{{ $car->year ?? old('year') }}"/>
                @error('year')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="vin" class="d-block text-uppercase text-secondary mb-2">
                    VIN :
                </label>
                <input type="text" name="vin" id="vin" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('vin') ? 'border-danger' : '' }}"
                       value="{{ $car->vin ?? old('vin') }}"/>
                @error('vin')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="engine_number" class="d-block text-uppercase text-secondary mb-2">
                    Engine Number :
                </label>
                <input type="text" name="engine_number" id="engine_number" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('engine_number') ? 'border-danger' : '' }}"
                       value="{{ $car->engine_number ?? old('engine_number') }}"/>
                @error('engine_number')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="license_plate" class="d-block text-uppercase text-secondary mb-2">
                    License Plate :
                </label>
                <input type="text" name="license_plate" id="license_plate" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('license_plate') ? 'border-danger' : '' }}"
                       value="{{ $car->license_plate ?? old('license_plate') }}"/>
                @error('license_plate')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="color" class="d-block text-uppercase text-secondary mb-2">
                    Color :
                </label>
                <input type="text" name="color" id="color" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('color') ? 'border-danger' : '' }}"
                       value="{{ $car->color ?? old('color') }}"/>
                @error('color')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="mileage" class="d-block text-uppercase text-secondary mb-2">
                    Mileage :
                </label>
                <input type="text" name="mileage" id="mileage" class="form-control shadow-sm w-100 py-2 px-3 text-secondary
            {{ $errors->has('mileage') ? 'border-danger' : '' }}"
                       value="{{ $car->mileage ?? old('mileage') }}"/>
                @error('mileage')
                <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="note" class=" d-block text-uppercase text-secondary mb-2">Note :</label>
                <textarea name="note" id="note" rows="5"
                          class="form-control shadow-sm w-100 py-2 px-3 text-secondary
                      {{ $errors->has('title') ? 'border-danger' : '' }}">{{ $car->note ?? old('note') }}</textarea>
                @error('note')
                <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex gap-2 align-items-center">
                <button type="submit" class="btn btn-outline-success">
                    @isset($car)
                        Update Car
                    @else
                        Add Car
                    @endisset
                </button>
                <a href="{{ route('cars.index') }}" class="btn btn-outline-danger link">Cancel</a>
            </div>
        </form>
    </div>
@endsection



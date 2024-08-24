@extends('layouts.app')

@section('title', $car->brand)

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
    <div class="mb-4">

        <a href="{{ route('cars.index') }}"
           class="btn btn-info text-light">← Go back to the car list!</a>
    </div>

    <div class="card mb-4">
        <p class="mb-4 fw-small text-muted">Model : {{ $car->model }}</p>
        <p class="mb-4 fw-small text-muted">Year : {{ $car->year }}</p>
        <p class="mb-4 fw-small text-muted">Vin : {{ $car->vin }}</p>
        <p class="mb-4 fw-small text-muted">Engine number : {{ $car->engine_number }}</p>
        <p class="mb-4 fw-small text-muted">License plate : {{ $car->license_plate }}</p>
        <p class="mb-4 fw-small text-muted">Color : {{ $car->color }}</p>
        <p class="mb-4 fw-small text-muted">Mileage : {{ $car->mileage }}</p>
        <p class="mb-4 fw-small text-muted">Note : {{ $car->note }}</p>
    </div>

    {{--Show what time is last update. From by date to how many time pass you have updated it--}}
    <p class="mb-4 fw-small text-secondary">Created {{ $car->created_at->diffForHumans() }} •
        Updated {{ $car->updated_at->diffForHumans() }}</p>


    <p class="mb-4">
        @if($car->status)
            <span class="fw-medium text-warning">Rented</span>
        @else
            <span class="fw-medium text-success">Available</span>
        @endif
    </p>


    <div class="d-flex gap-2">
        <div>
            <a href="{{ route('cars.edit', ['car'=> $car]) }}"
               class="btn btn-outline-primary">Edit</a>
        </div>
        <div>
            <form method="POST" action="{{ route('cars.toggle-available', ['car' => $car]) }}">
                @csrf
                @method('PUT')
                <button class="btn btn-outline-info" type="submit">
                    Mark as {{ $car->status ? 'Available' : 'Rented'}}
                </button>
            </form>
        </div>

        <form action="{{ route('cars.destroy', ['car' => $car]) }}" method="POST"
        onsubmit="return confirm('คุณแน่ใจใช่มั้ย ที่จะลบข้อมูลของรถคันนี้?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </div>
@endsection

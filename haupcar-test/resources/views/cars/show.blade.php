@extends('layouts.app')

@section('title', $car->brand)

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="container">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>Model :</td>
                        <td>{{ $car->model }}</td>
                    </tr>
                    <tr>
                        <td>Year :</td>
                        <td>{{ $car->year }}</td>
                    </tr>
                    <tr>
                        <td>VIN :</td>
                        <td>{{ $car->vin }}</td>
                    </tr>
                    <tr>
                        <td>Engine Number :</td>
                        <td>{{ $car->engine_number }}</td>
                    </tr>
                    <tr>
                        <td>License Plate :</td>
                        <td>{{ $car->license_plate }}</td>
                    </tr>
                    <tr>
                        <td>Color :</td>
                        <td>{{ $car->color }}</td>
                    </tr>
                    <tr>
                        <td>Mileage :</td>
                        <td>{{ $car->mileage }}</td>
                    </tr>
                    <tr>
                        <td>Note :</td>
                        <td>{{ $car->note }}</td>
                    </tr>
                    </tbody>
                </table>

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
                        <form  method="POST" action="{{ route('cars.toggle-available', ['car' => $car]) }}">
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

                    <div class="justify-content-end ms-auto">
                        <a href="{{ route('cars.index') }}"
                           class="btn btn-info text-light">← Go back to the car list!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

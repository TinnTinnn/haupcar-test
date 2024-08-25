@extends('layouts.app')

@section('title', 'The list of Cars')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Car <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="{{ route('cars.create') }}" class="btn btn-secondary">
                            <i class="material-icons">&#xE147;</i>
                            <span>Add New Car</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="{{ route('cars.show', $car->id) }}">
                                {{ $car->brand }}
                            </a>
                        </td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->year }}</td>
                        <td>
                            @if($car->status == 0)
                                <span class="status text-success">&bull;</span> Available
                            @else
                                <span class="status text-warning">&bull;</span> Rented
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('cars.edit', ['car'=> $car]) }}" class="settings" title="Edit" data-toggle="tooltip">
                                <i class="material-icons">&#xE8B8;</i>
                            </a>
                            <a href="{{ route('cars.destroy', ['car' => $car]) }}" class="delete" title="GoToDelete" data-toggle="tooltip">
                                <i class="material-icons">&#xE5C9;</i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                @if ($cars->count())
                    <nav class="mt-4">
                        {{ $cars->links('pagination::bootstrap-5') }}
                    </nav>
                @endif

            </div>
        </div>
    </div>
@endsection

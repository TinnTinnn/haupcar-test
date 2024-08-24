
@extends('layouts.app')

@section('title', 'The list of Cars')

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
    <nav class="mb-4">
        <a href="{{ route('cars.create') }}"
           class="btn btn-outline-info fw-large">Add Car!</a>
    </nav>

    @forelse ($cars as $car)
        <div>
            <a href="{{ route('cars.show', ['car' => $car->id]) }}"
               class="{{ $car->completed ? 'text-decoration-line-through' : 'text-decoration-none' }}"
            >{{ $car->brand }}</a>
        </div>
    @empty
        <div>There are no cars!</div>
    @endforelse

    @if($cars->count())
        <nav class="mt-4">
            {{ $cars->links('pagination::bootstrap-5') }}
        </nav>
    @endif
@endsection





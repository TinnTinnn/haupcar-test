@extends('layouts.app')

@section('content')
    @include('cars.form', ['car' => $car])
@endsection

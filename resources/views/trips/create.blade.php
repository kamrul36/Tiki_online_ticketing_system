<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- resources/views/trips/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Create Trip</h1>
        <form action="{{ route('trips.store') }}" method="post" class="bg-white p-6 rounded shadow-md">
            @csrf
            <label for="location_from_id" class="block text-sm font-medium text-gray-600">From:</label>
            <select name="location_from_id" required class="mt-1 p-2 w-full border rounded-md">
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
            <label for="location_to_id" class="block text-sm font-medium text-gray-600 mt-4">To:</label>
            <select name="location_to_id" required class="mt-1 p-2 w-full border rounded-md">
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
            <label for="date" class="block text-sm font-medium text-gray-600 mt-4">Date:</label>
            <input type="date" name="date" required class="mt-1 p-2 w-full border rounded-md">
            <button type="submit" class="mt-4 bg-blue-500 text-white p-2 rounded-md">Create Trip</button>
        </form>
    </div>
@endsection



</body>
</html>
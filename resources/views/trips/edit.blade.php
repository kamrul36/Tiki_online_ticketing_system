<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/trips/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Edit Trip: {{ $trip->locationFrom->name }} to {{ $trip->locationTo->name }}</h1>
        <form action="{{ route('trips.update', $trip->id) }}" method="post" class="bg-white p-6 rounded shadow-md">
            @csrf
            @method('PUT')
            <label for="location_from_id" class="block text-sm font-medium text-gray-600">From:</label>
            <select name="location_from_id" required class="mt-1 p-2 w-full border rounded-md">
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}" {{ $trip->location_from_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                @endforeach

</body>
</html>
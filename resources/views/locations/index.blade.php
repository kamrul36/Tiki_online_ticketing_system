<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="text-2xl font-bold">Locations</h1>
        <a href="{{ route('locations.create') }}" class="text-blue-500">Add Location</a>
    </div>
    
    <ul class="list-disc pl-4">
        @forelse ($locations as $location)
            <li>{{ $location->name }}</li>
        @empty
            <li>No locations found.</li>
        @endforelse
    </ul>
@endsection

</body>
</html>
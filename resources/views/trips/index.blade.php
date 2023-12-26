<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/trips/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Trips</h1>
        <ul class="list-disc pl-4">
            @foreach ($trips as $trip)
                <li class="mb-2">{{ $trip->locationFrom->name }} to {{ $trip->locationTo->name }} on {{ $trip->date }}</li>
            @endforeach
        </ul>
    </div>
@endsection

</body>
</html>

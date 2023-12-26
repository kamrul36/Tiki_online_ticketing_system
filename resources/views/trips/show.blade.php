<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/trips/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $trip->locationFrom->name }} to {{ $trip->locationTo->name }} on {{ $trip->date }}</h1>
        <!-- Add other details as needed -->
    </div>
@endsection

</body>
</html>
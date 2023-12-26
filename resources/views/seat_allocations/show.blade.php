<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/seat_allocations/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Seat Allocation Details</h1>
    <p>User: {{ $allocation->user->name }}</p>
    <p>Trip Date: {{ $allocation->trip->date }}</p>
    <p>Seat Number: {{ $allocation->seat_number }}</p>
    <a href="{{ route('seat-allocations.edit', $allocation->id) }}" class="text-blue-500">Edit</a>
@endsection

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/seat_allocations/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Seat Allocations</h1>
    <ul class="list-disc pl-4">
        @forelse ($seatAllocations as $allocation)
            <li>
                User: {{ $allocation->user->name }}, 
                Trip Date: {{ $allocation->trip->date }}, 
                Seat Number: {{ $allocation->seat_number }}
            </li>
        @empty
            <li>No seat allocations found.</li>
        @endforelse
    </ul>
@endsection

</body>
</html>
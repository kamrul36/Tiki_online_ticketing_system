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
    <form action="/trips/{{ $trip->id }}/tickets" method="post" class="bg-white p-6 rounded shadow-md">
        @csrf
        <label for="seat_number" class="block text-sm font-medium text-gray-600">Select Seat:</label>
        <select name="seat_number" required class="mt-1 p-2 w-full border rounded-md">
            @foreach ($availableSeats as $seat)
                <option value="{{ $seat }}">{{ $seat }}</option>
            @endforeach
        </select>
        <button type="submit" class="mt-4 bg-blue-500 text-white p-2 rounded-md">Book Ticket</button>
    </form>
@endsection

</body>
</html>
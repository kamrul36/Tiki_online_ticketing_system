<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/seat_allocations/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Seat Allocation</h1>
    <form action="{{ route('seat-allocations.update', $allocation->id) }}" method="post" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="user_id" class="block text-sm font-medium text-gray-600">Select User:</label>
            <select name="user_id" required class="mt-1 p-2 w-full border rounded-md">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $allocation->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="trip_id" class="block text-sm font-medium text-gray-600">Select Trip:</label>
            <select name="trip_id" required class="mt-1 p-2 w-full border rounded-md">
                @foreach ($trips as $trip)
                    <option value="{{ $trip->id }}" {{ $trip->id == $allocation->trip_id ? 'selected' : '' }}>
                        {{ $trip->date }} ({{ $trip->locationFrom->name }} to {{ $trip->locationTo->name }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="seat_number" class="block text-sm font-medium text-gray-600">Select Seat Number:</label>
            <select name="seat_number" required class="mt-1 p-2 w-full border rounded-md">
                @for ($i = 1; $i <= 36; $i++)
                    <option value="{{ $i }}" {{ $i == $allocation->seat_number ? 'selected' : '' }}>{{ $i }}</option>
                @endfor
            </select>
        </div>
        <button type="submit" class="mt-4 bg-blue-500 text-white p-2 rounded-md">Update Seat Allocation</button>
    </form>
@endsection

</body>
</html>
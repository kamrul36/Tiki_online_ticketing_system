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
    <h1 class="text-2xl font-bold mb-4">Add Location</h1>

    <form action="{{ route('locations.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name:</label>
            <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Add Location</button>
    </form>
@endsection

</body>
</html>
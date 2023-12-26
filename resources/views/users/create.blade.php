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
    <h1 class="text-2xl font-bold mb-4">Add User</h1>

    <form action="{{ route('users.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Name:</label>
            <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-600">Email:</label>
            <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-600">Password:</label>
            <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Add User</button>
    </form>
@endsection

</body>
</html>

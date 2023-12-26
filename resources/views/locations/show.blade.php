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
        <h1 class="text-2xl font-bold">{{ $location->name }}</h1>
    </div>

    <div class="flex">
        <a href="{{ route('locations.edit', $location) }}" class="text-blue-500 mr-4">Edit</a>

        <form action="{{ route('locations.destroy', $location) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500">Delete</button>
        </form>
    </div>
@endsection

</body>
</html>
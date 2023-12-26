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
        <h1 class="text-2xl font-bold">Users</h1>
        <a href="{{ route('users.create') }}" class="text-blue-500">Add User</a>
    </div>
    
    <ul class="list-disc pl-4">
        @forelse ($users as $user)
            <li>
                <a href="{{ route('users.show', $user) }}" class="text-blue-500">{{ $user->name }}</a>
                ({{ $user->email }})
            </li>
        @empty
            <li>No users found.</li>
        @endforelse
    </ul>
@endsection

</body>
</html>
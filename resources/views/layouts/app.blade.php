<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiki Bus Ticketing System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <nav class="bg-blue-500 p-6">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('trips.index') }}" class="text-white text-2xl font-bold">Tiki Ticketing</a>
            <div class="flex items-center">
                <a href="{{ route('trips.index') }}" class="text-white hover:text-gray-200 ml-4">Trips</a>
                <a href="{{ route('locations.index') }}" class="text-white hover:text-gray-200 ml-4">Locations</a>
                <a href="{{ route('trips.create') }}" class="text-white hover:text-gray-200 ml-4">Create Trip</a>
                <a href="{{ route('locations.create') }}" class="text-white hover:text-gray-200 ml-4">Create Location</a>
                <a href="{{ route('seat-allocations.create') }}" class="text-white hover:text-gray-200 ml-4">Seat Allocations Table</a>
                <a href="{{ route('users.create') }}" class="text-white hover:text-gray-200 ml-4">Create User</a>
                <a href="{{ route('users.index') }}" class="text-white hover:text-gray-200 ml-4">Users</a>

            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

</body>
</html>

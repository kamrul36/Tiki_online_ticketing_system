<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $location = Location::create([
            'name' => $request->input('name'),
        ]);

        return redirect("/locations/{$location->id}");
    }

    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $location->update([
            'name' => $request->input('name'),
        ]);

        return redirect("/locations/{$location->id}");
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return redirect('/locations');
    }
}

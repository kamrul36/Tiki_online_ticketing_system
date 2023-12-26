<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{

    public function index()
    {
        $trips = Trip::with(['locationFrom', 'locationTo'])->get();
        return view('trips.index', compact('trips'));
    }

    public function show(Trip $trip)
    {
        return view('trips.show', compact('trip'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('trips.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_from_id' => 'required|exists:locations,id',
            'location_to_id' => 'required|exists:locations,id',
            'date' => 'required|date',
        ]);

        $trip = Trip::create([
            'location_from_id' => $request->input('location_from_id'),
            'location_to_id' => $request->input('location_to_id'),
            'date' => $request->input('date'),
        ]);

        return redirect("/trips/{$trip->id}");
    }

    public function edit(Trip $trip)
    {
        $locations = Location::all();
        return view('trips.edit', compact('trip', 'locations'));
    }

    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'location_from_id' => 'required|exists:locations,id',
            'location_to_id' => 'required|exists:locations,id',
            'date' => 'required|date',
        ]);

        $trip->update([
            'location_from_id' => $request->input('location_from_id'),
            'location_to_id' => $request->input('location_to_id'),
            'date' => $request->input('date'),
        ]);

        return redirect("/trips/{$trip->id}");
    }

    public function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect('/trips');
    }
    // public function create() {
    //     return view ('trips.create');
    // }

    // public function store (Request $request) {
    //     $trip = Trip::create(['date' => $request->input('date')]);
    //     return redirect("/trips/{$trip->id}");
    // }

    // public function show (Trip $trip) {
    //     return view ('trips.show', compact('trip'));
    // }
}

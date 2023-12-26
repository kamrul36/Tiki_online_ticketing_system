<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class SeatAllocationController extends Controller
{
    public function index()
    {
        $seatAllocations = SeatAllocation::with(['user', 'trip'])->get();
        return view('seat_allocations.index', compact('seatAllocations'));
    }

    public function show(SeatAllocation $allocation)
    {
        return view('seat_allocations.show', compact('allocation'));
    }

    public function create()
    {
        $users = User::all();
        $trips = Trip::all();
        return view('seat_allocations.create', compact('users', 'trips'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'trip_id' => 'required|exists:trips,id',
            'seat_number' => 'required|integer|between:1,36',
        ]);

        $allocation = SeatAllocation::create([
            'user_id' => $request->input('user_id'),
            'trip_id' => $request->input('trip_id'),
            'seat_number' => $request->input('seat_number'),
        ]);

        return redirect("/seat-allocations/{$allocation->id}");
    }

    public function edit(SeatAllocation $allocation)
    {
        $users = User::all();
        $trips = Trip::all();
        return view('seat_allocations.edit', compact('allocation', 'users', 'trips'));
    }

    public function update(Request $request, SeatAllocation $allocation)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'trip_id' => 'required|exists:trips,id',
            'seat_number' => 'required|integer|between:1,36',
        ]);

        $allocation->update([
            'user_id' => $request->input('user_id'),
            'trip_id' => $request->input('trip_id'),
            'seat_number' => $request->input('seat_number'),
        ]);

        return redirect("/seat-allocations/{$allocation->id}");
    }

    public function destroy(SeatAllocation $allocation)
    {
        $allocation->delete();
        return redirect('/seat-allocations');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Trip;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create(Trip $trip)
    {
        $availableSeats = range(1, 36);
        return view('tickets.create', compact('trip', 'availableSeats'));
    }

    public function store(Request $request, Trip $trip)
    {
        $request->validate([
            'seat_number' => 'required|integer|between:1,36',
        ]);

        $trip->tickets()->create(['seat_number' => $request->input('seat_number')]);

        return redirect("/trips/{$trip->id}");
    }
}

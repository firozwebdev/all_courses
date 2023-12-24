<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Location;
class TripController extends Controller
{
    public function create()
    {
        $locations = Location::all();
        return $locations;

        return view('dashboard', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_id' => 'required',
            'trip_date' => 'required|date',
        ]);

        Trip::create([
            'location_id' => $request->location_id,
            'trip_date' => $request->trip_date,
        ]);

        return redirect()->route('trips.create')->with('success', 'Trip created successfully.');
    }
}

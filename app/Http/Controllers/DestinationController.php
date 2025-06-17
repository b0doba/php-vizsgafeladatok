<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('destination.index', ['destinations' => Destination::paginate(4)]);
    }

    public function show(Destination $destination){
        $dest = Destination::with('departures')->findOrFail($destination->id);
        return view('destination.show', ['destination' => $dest]);
    }
}

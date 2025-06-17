<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeparturesRequest;
use App\Http\Requests\UpdateDeparturesRequest;
use App\Models\Departures;

class DeparturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeparturesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Departures $departures)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departures $departures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeparturesRequest $request, Departures $departures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departures $departures)
    {
        //
    }
}

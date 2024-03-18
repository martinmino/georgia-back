<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCapacidadRequest;
use App\Http\Requests\UpdateCapacidadRequest;
use App\Models\Capacidad;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class CapacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Capacidad::all());
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
    public function store(StoreCapacidadRequest $request)
    {
        $capacidad = Capacidad::create($request->all());
        return new DataItem($capacidad);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new DataItem(Capacidad::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Capacidad $capacidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCapacidadRequest $request, string $id)
    {
        $capacidad = Capacidad::find($id);
        $capacidad->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Capacidad::destroy($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCondicionRequest;
use App\Http\Requests\UpdateCondicionRequest;
use App\Models\Condicion;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class CondicionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Condicion::all());
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
    public function store(StoreCondicionRequest $request)
    {
        $condicion = Condicion::create($request->all());
        return new DataItem($condicion);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $condicion = Condicion::find($id);
        return new DataItem($condicion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Condicion $condicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCondicionRequest $request, string $id)
    {
        $condicion = Condicion::find($id);
        $condicion->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Condicion::destroy($id);
    }
}

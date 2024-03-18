<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use App\Http\Requests\StoreAgenteRequest;
use App\Http\Requests\UpdateAgenteRequest;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Agente::all());
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
    public function store(StoreAgenteRequest $request)
    {
        $agente = Agente::create($request->all());
        return new DataItem($agente);
    }

    /**
     * Display the specified resource.
     */
    public function show(Agente $agente)
    {
        return new DataItem($agente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agente $agente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgenteRequest $request, Agente $agente)
    {
        $agente->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Agente::destroy($id);
    }
}

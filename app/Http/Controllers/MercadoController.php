<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMercadoRequest;
use App\Http\Requests\UpdateMercadoRequest;
use App\Models\Mercado;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class MercadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Mercado::all());
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
    public function store(StoreMercadoRequest $request)
    {
        $mercado = Mercado::create($request->all());
        return new DataItem($mercado);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mercado $mercado)
    {
        return new DataItem($mercado);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mercado $mercado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMercadoRequest $request, Mercado $mercado)
    {
        $mercado->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mercado::destroy($id);
    }
}

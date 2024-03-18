<?php

namespace App\Http\Controllers;

use App\Models\BajaMotivo;
use App\Http\Requests\StoreBajaMotivoRequest;
use App\Http\Requests\UpdateBajaMotivoRequest;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class BajaMotivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(BajaMotivo::all());
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
    public function store(StoreBajaMotivoRequest $request)
    {
        $bajaMotivo = BajaMotivo::create($request->all());
        return new DataItem($bajaMotivo);
    }

    /**
     * Display the specified resource.
     */
    public function show(BajaMotivo $bajaMotivo)
    {
        return new DataItem($bajaMotivo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BajaMotivo $bajaMotivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBajaMotivoRequest $request, BajaMotivo $bajaMotivo)
    {
        $bajaMotivo->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BajaMotivo $bajaMotivo)
    {
        BajaMotivo::destroy($bajaMotivo->id);
    }
}

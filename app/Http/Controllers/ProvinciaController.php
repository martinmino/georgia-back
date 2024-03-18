<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvinciaRequest;
use App\Http\Requests\UpdateProvinciaRequest;
use App\Models\Provincia;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Provincia::all());
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
    public function store(StoreProvinciaRequest $request)
    {
        $provincia = Provincia::create($request->all());
        return new DataItem($provincia);
    }

    /**
     * Display the specified resource.
     */
    public function show(Provincia $provincia)
    {
        return new DataItem($provincia);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provincia $provincia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProvinciaRequest $request, Provincia $provincia)
    {
        $provincia->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Provincia::destroy($id);
    }
}

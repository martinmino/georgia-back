<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCalleRequest;
use App\Http\Requests\UpdateCalleRequest;
use App\Models\Calle;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class CalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Calle::all());
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
    public function store(StoreCalleRequest $request)
    {
        $calle = Calle::create($request->all());
        return new DataItem($calle);
    }

    /**
     * Display the specified resource.
     */
    public function show(Calle $calle)
    {
        return new DataItem($calle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calle $calle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalleRequest $request, Calle $calle)
    {
        $calle->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Calle::destroy($id);
    }
}

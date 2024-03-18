<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLargoRequest;
use App\Http\Requests\UpdateLargoRequest;
use App\Models\Largo;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class LargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Largo::all());

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
    public function store(StoreLargoRequest $request)
    {
        $largo = Largo::create($request->all());
        return new DataItem($largo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Largo $largo)
    {
        return new DataItem($largo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Largo $largo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLargoRequest $request, Largo $largo)
    {
        $largo->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Largo::destroy($id);
    }
}

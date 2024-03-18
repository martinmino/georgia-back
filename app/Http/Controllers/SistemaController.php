<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSistemaRequest;
use App\Http\Requests\UpdateSistemaRequest;
use App\Models\Sistema;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Sistema::all());
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
    public function store(StoreSistemaRequest $request)
    {
        $sistema = Sistema::create($request->all());
        return new DataItem($sistema);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sistema $sistema)
    {
        return new DataItem($sistema);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sistema $sistema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSistemaRequest $request, Sistema $sistema)
    {
        $sistema->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sistema::destroy($id);
    }
}

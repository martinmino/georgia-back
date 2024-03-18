<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendedorRequest;
use App\Http\Requests\UpdateVendedorRequest;
use App\Models\Vendedor;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Vendedor::all());
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
    public function store(StoreVendedorRequest $request)
    {
        $vendedor = Vendedor::create($request->all());
        return new DataItem($vendedor);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendedor = Vendedor::find($id);
        return new DataItem($vendedor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendedor $vendedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendedorRequest $request, string $id)
    {
        $vendedor = Vendedor::find($id);
        $vendedor->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vendedor::destroy($id);
    }
}

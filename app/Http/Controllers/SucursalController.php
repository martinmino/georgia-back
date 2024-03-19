<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSucursalRequest;
use App\Http\Requests\UpdateSucursalRequest;
use App\Models\Sucursal;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use App\Filters\SucursalFilter;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new SucursalFilter();
        $queryItems = $filter->transform($request);

        $sucursal = Sucursal::where($queryItems);

        return new DataCollection($sucursal->paginate()->appends($request->query()));
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
    public function store(StoreSucursalRequest $request)
    {
        $sucursal = Sucursal::create($request->all());
        return new DataItem($sucursal);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sucursal = Sucursal::find($id);
        return new DataItem($sucursal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sucursal $sucursal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSucursalRequest $request, string $id)
    {
        $sucursal = Sucursal::find($id);
        $sucursal->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sucursal::destroy($id);
    }
}

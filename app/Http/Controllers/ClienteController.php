<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use App\Filters\ClienteFilter;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ClienteFilter();
        $queryItems = $filter->transform($request);

        $clientes = Cliente::where($queryItems);

        return new DataCollection($clientes->paginate()->appends($request->query()));
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
    public function store(StoreClienteRequest $request)
    {
        $cliente = Cliente::create($request->all());
        return new DataItem($cliente);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return new DataItem($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cliente::destroy($id);
    }
}

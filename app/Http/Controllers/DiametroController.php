<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiametroRequest;
use App\Http\Requests\UpdateDiametroRequest;
use App\Models\Diametro;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use Illuminate\Http\Request;

class DiametroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DataCollection(Diametro::all());
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
    public function store(StoreDiametroRequest $request)
    {
        $diametro = Diametro::create($request->all());
        return new DataItem($diametro);
    }

    /**
     * Display the specified resource.
     */
    public function show(Diametro $diametro)
    {
        return new DataItem($diametro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diametro $diametro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiametroRequest $request, Diametro $diametro)
    {
        $diametro->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Diametro::destroy($id);
    }
}

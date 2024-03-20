<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParqueRequest;
use App\Http\Requests\UpdateParqueRequest;
use App\Models\Parque;
use App\Http\Resources\DataCollection;
use App\Http\Resources\DataItem;
use App\Filters\ParqueFilter;
use Illuminate\Http\Request;

class ParqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ParqueFilter();
        $queryItems = $filter->transform($request);
        $parques = Parque::where($queryItems);
        $parques->with(['extintor', 'manguera']);

        return new DataCollection($parques->paginate()->appends($request->query()));
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
    public function store(StoreParqueRequest $request)
    {
        $parque = Parque::create($request->all());
        return new DataItem($parque);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parque $parque)
    {
        switch ($parque->sistema_id) {
            case 1:
                $parque->extintor;
                break;
            case 2:
                $parque->manguera;
                break;
        }
        return new DataItem($parque);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parque $parque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParqueRequest $request, Parque $parque)
    {
        $parque->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Parque::destroy($id);
    }
}

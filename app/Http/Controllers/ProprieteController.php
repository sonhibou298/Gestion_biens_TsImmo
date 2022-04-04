<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Models\Propriete;
use App\Http\Requests\StoreProprieteRequest;
use App\Http\Requests\UpdateProprieteRequest;
use App\Models\Quartier;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prop = Propriete::all();
        return view('proprietes.list', compact('prop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proprietaire = Proprietaire::all();
        $quarier = Quartier::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProprieteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProprieteRequest $request)
    {
        $prop = new Propriete();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function show(Propriete $propriete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function edit(Propriete $propriete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProprieteRequest  $request
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProprieteRequest $request, Propriete $propriete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propriete $propriete)
    {
        //
    }
}

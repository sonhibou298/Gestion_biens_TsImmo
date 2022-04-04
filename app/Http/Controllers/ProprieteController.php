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
        $propriete = Propriete::all();
        return view('proprietes.list', compact('propriete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proprietaire = Proprietaire::all();
        $quartier = Quartier::all();
        return view('proprietes.add', compact('proprietaire','quartier'));

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
        $prop->nomPropriete = $request->nom;
        $prop->dateEnregistrement = $request->date;
        $prop->nbrEtage = $request->nbrEtage;
        $prop->nbrPiece = $request->nbrPiece;
        $prop->superficie = $request->superficie;
        $prop->adresse = $request->adresse;
        $prop->typePropriete = $request->type;
        $prop->proprietaire_id = $request->proprietaire;
        $prop->quartier_id = $request->quartier;

        $prop->save();
        return redirect()->route('listePropriete');
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
    public function edit($id)
    {
        $proprietaire = Proprietaire::all();
        $quartier = Quartier::all();
        $propriete = Propriete::find($id);
        return view('proprietes.edit', compact('propriete', 'proprietaire', 'quartier'));
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

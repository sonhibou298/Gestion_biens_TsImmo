<?php

namespace App\Http\Controllers;

use App\Models\Proprietaire;
use App\Http\Requests\StoreProprietaireRequest;
use App\Http\Requests\UpdateProprietaireRequest;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietaire = Proprietaire::all();
        return view("proprietaires.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proprietaires.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProprietaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProprietaireRequest $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $proprietaire = new Proprietaire();
        $proprietaire->codeProprietaire = $request->code;
        $proprietaire->cni = $request->cni;
        $proprietaire->nomProprietaire = $request->nom;
        $proprietaire->prenomProprietaire = $request->prenom;
        $proprietaire->sexe = $request->sexe;
        $proprietaire->dateNaissance = $request->date;
        $proprietaire->lieuNaissance = $request->lieuNaissance;
        $proprietaire->users_id = $request->admin;

        $proprietaire->save();


        return view('proprietaires.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProprietaireRequest  $request
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProprietaireRequest $request, Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proprietaire $proprietaire)
    {
        //
    }
}

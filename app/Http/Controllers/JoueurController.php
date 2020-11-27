<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomJoueur' => 'required|min:5|max:20',
            'prenomJoueur' => 'required|min:5|max:20',
            'ageJoueur' => 'required|integer|min:10|max:40',
            'paysOrigine' => 'required',
            'telephoneJoueur' => 'required|min:10|max:10',
            'emailJoueur' => 'required',
        ]);

        $joueur = new Joueur();
        $joueur->nom = $request->nomJoueur;
        $joueur->prenom = $request->prenomJoueur;
        $joueur->age = $request->ageJoueur;
        $joueur->pays_origine = $request->paysOrigine;
        $joueur->role = $request->roleJoueur;
        $joueur->telephone = $request->telephoneJoueur;
        $joueur->email = $request->emailJoueur;
        $joueur->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        //
    }
}

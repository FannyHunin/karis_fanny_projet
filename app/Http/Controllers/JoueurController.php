<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Models\Equipe;
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
        $joueurs = Joueur::all();
        return view('pages.joueurs', compact('joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dataEquipe = Equipe::all();
        return view('pages.createJoueur', compact('dataEquipe'));
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
            'telephoneJoueur' => 'required|min:10|max:10',
            'emailJoueur' => 'required',
        ]);

        $joueur = new Joueur();
        $joueur->nom = $request->nomJoueur;
        $joueur->prenom = $request->prenomJoueur;
        $joueur->age = $request->ageJoueur;
        $joueur->genre = $request->genreJoueur;
        $joueur->pays_origine = $request->paysJoueur;
        $joueur->role = $request->roleJoueur;
        $joueur->telephone = $request->telephoneJoueur;
        $joueur->email = $request->emailJoueur;
        $joueur->equipe_id = $request->equipeJoueur;
        $joueur->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur, $id)
    {
        $showJoueur = Joueur::find($id);
        return view('pages.showJoueurs', compact('showJoueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur, $id)
    {
        $dataEquipe = Equipe::all();
        $edit = Joueur::find($id);
        return view('pages.editJoueurs', compact('edit', 'dataEquipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur, $id)
    {
        $joueur = Joueur::find($id);
        $joueur->nom = $request->editNomJoueur;
        $joueur->prenom = $request->editPrenomJoueur;
        $joueur->age = $request->editAgeJoueur;
        $joueur->genre = $request->editGenreJoueur;
        $joueur->pays_origine = $request->editPaysJoueur;
        $joueur->role = $request->editRoleJoueur;
        $joueur->telephone = $request->editTelephoneJoueur;
        $joueur->email = $request->editEmailJoueur;
        $joueur->equipe_id = $request->editEquipeJoueur;
        $joueur->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur, $id)
    {
        $newDelete = Joueur::find($id);
        $newDelete->delete();
        return redirect('/joueurs');
    }

    public function redirectJoueur($equipe_id)
    {
        $redirect = Joueur::find($equipe_id);
        return redirect("showJoueursEquipe/" . $redirect->equipe_id);
    }
}

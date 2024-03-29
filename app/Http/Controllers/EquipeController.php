<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::all();
        $data = Equipe::all();
        return view('pages.index', compact('data', 'joueurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataEquipe = Equipe::all();
        return view('pages.createEquipe', compact('dataEquipe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEquipe = new Equipe;

        $request->validate([
            'nom' => 'required|min:5|max:20',
            'ville' => 'required|max:40',
            'joueurs_max' => 'required|integer|min:1|max:10',
        ]);

        $newEquipe->nom = $request->nom;
        $newEquipe->pays = $request->pays;
        $newEquipe->ville = $request->ville;
        $newEquipe->joueurs_max = $request->joueurs_max;

        $newEquipe->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipeData = Equipe::find($id);
        return view('pages.showEquipe', compact('equipeData'));
    }

    public function showJE($id)
    {
        $equipeData = Equipe::find($id);
        $joueurData = Joueur::all();
        $photos = Photo::all();
        return view('pages.showJoueursEquipe', compact('joueurData', 'equipeData', 'photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newEquipe = Equipe::find($id);
        return view('pages.editEquipe', compact('newEquipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newEquipe = Equipe::find($id);
        $newEquipe->nom = $request->nom;
        $newEquipe->pays = $request->pays;
        $newEquipe->ville = $request->ville;
        $newEquipe->joueurs_max = $request->joueurs_max;
        $newEquipe->save();

        return redirect('show/' . $newEquipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newEquipe = Equipe::find($id);
        $newEquipe->delete();
        return redirect('/');
    }
}

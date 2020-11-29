@extends('template.template')

@section('content')
<div class="container mt-4">
    <form action="/update-joueurs/{{$edit->id}}" method="post">
        @csrf
        <div class="card border-dark p-3 px-5" style="width: 30rem;">
            <h1>Edit Joueur</h1>
            <label for="" class="mt-3">Nom : </label>
            <input type="text" name="editNomJoueur" class="w-50" value="{{$edit->nom}}">

            <label for="" class="mt-3">Prenom : </label>
            <input type="text" name="editPrenomJoueur" class="w-50" value="{{$edit->prenom}}">

            <label for="" class="mt-3">Age : </label>
            <input type="number" name="editAgeJoueur" class="w-25" value="{{$edit->age}}">

            <label for="" class="mt-3">Genre : </label>
            <select name="editGenreJoueur" class="w-25">
                <option {{ $edit->genre == "Homme" ? 'selected' : '' }}>Homme</option>
                <option {{ $edit->genre == "Femme" ? 'selected' : '' }}>Femme</option>
            </select>

            <label for="" class="mt-3">Pays d'origine : </label>
            <select name="editPaysJoueur" class="w-75">
                @foreach ($dataEquipe as $item)
                <option value="{{$item->pays}}">{{$item->pays}}</option>
                @endforeach
            </select>

            <label for="" class="mt-3">Rôle : </label>
            <select name="editRoleJoueur" class="w-50">
                <option value="Avant">Avant</option>
                <option value="Central">Central</option>
                <option value="Arrière">Arrière</option>
                <option value="Remplacant">Remplacant</option>
            </select>

            <label for="" class="mt-3">Téléphone : </label>
            <input type="text" name="editTelephoneJoueur" class="w-50" value="{{$edit->telephone}}">

            <label for="" class="mt-3">Email : </label>
            <input type="email" name="editEmailJoueur" class="w-75" value="{{$edit->email}}">

            <label for="" class="mt-3">Choisir une Équipe : </label>
            <select name="editEquipeJoueur" class="w-75">
                @foreach ($dataEquipe as $item)
                <option value="{{$item->id}}">{{$item->nom}}</option>
                @endforeach
            </select>

            <div class="mt-4">
                <button class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@stop
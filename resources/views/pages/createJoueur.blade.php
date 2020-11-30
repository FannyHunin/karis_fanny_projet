@extends('template.template')

@section('content')
<div class="container mt-4">
    <div>
        <div class="row">
            <div class="col-6">
                <form action="/store-joueur" method="post" class="d-flex flex-column mr-4">
                    @csrf
                    <div class="card border-dark p-3 px-5" style="width: 30rem;">
                        <h2 class="text-center">Ajouter un Joueur</h2>

                        <label for="" class="mt-3">Nom : </label>
                        <input type="text" name="nomJoueur" class="w-50" value="{{old('nomJoueur')}}">

                        <label for="" class="mt-3">Prenom : </label>
                        <input type="text" name="prenomJoueur" class="w-50" value="{{old('prenomJoueur')}}">

                        <label for="" class="mt-3">Age : </label>
                        <input type="number" name="ageJoueur" class="w-25" value="{{old('ageJoueur')}}">

                        <label for="" class="mt-3">Genre : </label>
                        <select name="genreJoueur" class="w-25">
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>

                        <label for="" class="mt-3">Pays d'origine : </label>
                        <select name="paysJoueur" class="w-75">
                            @foreach ($dataEquipe as $item)
                            <option value=" {{$item->pays}}">{{$item->pays}}</option>
                            @endforeach
                        </select>

                        <label for="" class="mt-3">Rôle : </label>
                        <select name="roleJoueur" class="w-50">
                            <option value="Avant">Avant</option>
                            <option value="Central">Central</option>
                            <option value="Arrière">Arrière</option>
                            <option value="Remplacant">Remplacant</option>
                        </select>

                        <label for="" class="mt-3">Téléphone : </label>
                        <input type="text" name="telephoneJoueur" class="w-50" value="{{old('telephoneJoueur')}}">

                        <label for="" class="mt-3">Email : </label>
                        <input type="email" name="emailJoueur" class="w-75" value="{{old('emailJoueur')}}">

                        <label for="" class="mt-3">Choisir une Équipe : </label>
                        <select name="equipeJoueur" class="w-75">
                            @foreach ($dataEquipe as $item)
                            <option value="{{$item->id}}">{{$item->nom}}</option>
                            @endforeach
                        </select>

                        <button class="btn btn-primary w-25 mt-4 mb-2">Créer</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <div class="card mb-4 border-dark p-3 px-5" style="width: 40rem; height: 15rem;">
                    <h2 class="text-center mb-5">Ajouter une Photo</h2>
                    <form action="/upload-photo" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="photo">
                        <button class="btn btn-primary d-flex mt-3">Upload</button>
                    </form>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{-- @foreach ($dataEquipe as $equipe)
                    @if($equipe->joueurs->count() == $equipe->pluck('joueurs_max'))
                        @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
            </div>
            @endif
            @endif
            @endforeach --}}
        </div>
    </div>
</div>
</div>
@stop
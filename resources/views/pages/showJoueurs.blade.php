@extends('template.template')

@section('content')
<div class="container mt-5">
    <div class="card border-dark mt-5 mb-5 pt-2 pb-2" style="width: 30rem;">
        <div class="card-body">
            <h2 class="mb-4" style="text-transform: uppercase; text-decoration: underline;">Info Joueur</h2>
            <h5 class="card-title font-weight-bolder text-primary">Nom : {{$showJoueur->nom}}</h5>
            <h5 class="card-title font-weight-bolder text-primary">Prenom : {{$showJoueur->prenom}}</h5>
            <h5 class="card-title font-weight-bolder text-primary">Age : {{$showJoueur->age}}</h5>
            <h5 class="card-title font-weight-bolder text-primary">Genre : {{$showJoueur->genre}}</h5>
            <h5 class="card-title font-weight-bolder text-primary">Pays d'origine : {{$showJoueur->pays_origine}}</h5>
            <h5 class="card-title font-weight-bolder text-primary">Rôle : {{$showJoueur->role}}</h5>
            <h5 class="card-title font-weight-bolder text-primary">Téléphone : {{$showJoueur->telephone}}</h5>
            <h5 class="card-title font-weight-bolder text-primary mb-4">Email : {{$showJoueur->email}}</h5>
            <div class="d-flex justify-content-center align-items-center">
                @foreach ($photos as $photo)
                <img src="{{asset('images/'.$photo->src)}}" alt="" height="260" width="200">
                @endforeach
            </div>

            <div class="mt-4">
                <a href="/redirect/{{$showJoueur->equipe_id}}" class="btn btn-success">Voir l'Équipe</a>
                <a href="/edit-joueurs/{{$showJoueur->id}}" class="btn btn-primary ml-2">Modifier</a>
                <a href="/delete-joueur/{{$showJoueur->id}}" class="btn btn-danger ml-2">Delete</a>
            </div>
        </div>
    </div>
</div>
@stop
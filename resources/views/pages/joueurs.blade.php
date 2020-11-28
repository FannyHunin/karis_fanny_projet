@extends('template.template')

@section('content')
<h1 class="text-center mt-5">Tous les Joueurs</h1>
<div class="container">
    <div class="row">
        @foreach ($joueurs as $joueur)
        <div class="col-4">
            <div class="card border-dark mt-5 mb-5 pt-2 pb-2" style="width: 21rem; height: 20rem;">
                <div class="card-body">
                    <h2 style="text-transform: uppercase; text-decoration: underline;">Nom de l'Equipe</h2>
                    <h5 class="card-title text-danger mb-5">Equipe : {{$joueur->equipe->nom}}</h5>
                    <h2 class="mb-4" style="text-transform: uppercase; text-decoration: underline;">Info Joueur</h2>
                    <h5 class="card-title font-weight-bolder text-primary">Nom : {{$joueur->nom}}</h5>
                    <h5 class="card-title font-weight-bolder text-primary">Prenom : {{$joueur->prenom}}</h5>
                </div>
                <a href="" class="btn btn-danger m-auto text-center" style="font-size: 17px;">Voir les détails du
                    Joueur</a>
            </div>
        </div>
        @if($loop->iteration % 3 == 0)
    </div>
    <div class="row">
        @endif
        @endforeach
    </div>
</div>
@stop
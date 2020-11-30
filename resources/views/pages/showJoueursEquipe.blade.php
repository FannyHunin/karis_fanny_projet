@extends('template.template')

@section('content')
<h1 class="mt-5">Équipe : {{$equipeData->nom}}</h1>
<div class="row">
    @foreach ($joueurData as $joueur)
    @if ($joueur->equipe_id == $equipeData->id)
    <div class="col-4">
        <div class="card border-dark mt-5 mb-5 pt-2 pb-2" style="width: 21rem;">
            <div class="card-body">
                <h2 class="mb-4" style="text-transform: uppercase; text-decoration: underline;">Info Joueur</h2>
                <h5 class="card-title font-weight-bolder text-primary">Nom : {{$joueur->nom}}</h5>
                <h5 class="card-title font-weight-bolder text-primary">Prenom : {{$joueur->prenom}}</h5>
                <h5 class="card-title font-weight-bolder text-primary">Rôle : {{$joueur->role}}</h5>
                <h5 class="card-title font-weight-bolder text-primary mb-4">Genre : {{$joueur->genre}}</h5>
                <div class="d-flex justify-content-center align-items-center">
                    @foreach ($photos as $photo)
                    <img src="{{asset('images/'.$photo->src)}}" alt="" height="260" width="200">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
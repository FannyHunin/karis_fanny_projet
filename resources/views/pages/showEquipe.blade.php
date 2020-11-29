@extends('template.template')

@section('content')
<section>
  <h1 class="text-center mt-5 mb-5">Infos Equipe</h1>
  <div class="card border-dark" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title text-danger font-weight-bold">Nom de l'équipe : {{$equipeData->nom}}</h5>
      <h5 class="card-title font-weight-bold">Pays : {{$equipeData->pays}}</h5>
      <h5 class="card-title font-weight-bold">Ville : {{$equipeData->ville}}</h5>
      <h5 class="card-text font-weight-bold mb-4">Nombre maximum de joueurs : {{$equipeData->joueurs_max}}</h5>
      <div>
        <a href="/edit/{{$equipeData->id}}" class="btn btn-primary border border-muted p-2">Editer</a>
        <a href="/delete/{{$equipeData->id}}" class="btn btn-danger border border-muted p-2">Supprimer</a>
      </div>
    </div>
  </div>
</section>
@endsection
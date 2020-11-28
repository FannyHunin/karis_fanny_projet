@extends('template.template')

@section('content')
<section>
  <h1 class="text-center mt-5 mb-5">Infos Equipe</h1>
  <div class="card text-center" style="width: 25rem;">
    <div class="card-body">
      <h5 class="card-title text-danger">Nom de l'équipe : {{$equipeData->nom}}</h5>
      <h5 class="card-title font-weight-bold">Pays : {{$equipeData->pays}}</h5>
      <h5 class="card-title text-muted">Ville : {{$equipeData->ville}}</h5>
      <p class="card-text">Nombre maximum de joueurs : {{$equipeData->joueurs_max}}</p>
    </div>
  </div>
</section>
@endsection
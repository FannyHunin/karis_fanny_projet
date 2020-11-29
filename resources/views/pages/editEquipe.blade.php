@extends('template.template')

@section('content')
<form action="/update/{{$newEquipe->id}}" method="post" class="mt-3">
    @csrf
    <h1 class="text-center mt-5 pb-5">Edit Equipe</h1>
    <div class="card border-dark p-3 px-5" style="width: 30rem;">
        <label for="" class="mt-3">Nom de l'équipe : </label>
        <input type="text" class="w-50" name="nom" value="{{$newEquipe->nom}}">

        <label for="" class="mt-3">Pays de l'équipe : </label>
        <input type="text" class="w-50" name="pays" value="{{$newEquipe->pays}}">

        <label for="" class="mt-3">Ville de l'équipe : </label>
        <input type="text" class="w-25" name="ville" value="{{$newEquipe->ville}}">

        <label for="" class="mt-3">Nombre maximum de joueurs : </label>
        <input type="number" class="w-25" name="joueurs_max" value="{{$newEquipe->joueurs_max}}">

        <button class="btn btn-primary w-50 mt-4 mb-2">Modifications terminées</button>
    </div>
</form>
</div>
</form>
@endsection
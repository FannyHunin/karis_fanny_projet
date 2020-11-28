@extends('template.template')

@section('content')
<section>
    <h1 class="text-center mt-5">Les équipes</h1>
    <div class="row m-0 mt-5 pb-4">
        @foreach ($data as $equipe)
        <div class="col-4">
            <div class="card m-auto text-center pb-4" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title text-danger">{{$equipe->nom}}</h5>
                    <p class="card-text">Nombre maximum de joueurs : {{$equipe->joueurs_max}}</p>
                </div>
                <a href="/show/{{$equipe->id}}">Voir les détails de l'équipe</a>
            </div>
        </div>
        @if ($loop->iteration % 3 == 0)
    </div>
    <div class="row m-0 mt-4 pb-4">
        @endif
        @endforeach
    </div>
</section>
@endsection
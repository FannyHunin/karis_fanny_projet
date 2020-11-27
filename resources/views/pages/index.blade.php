@extends('template')

@section('content')
    <section>
        <h1>Les équipes</h1>
        <div class="row mt-3">
            @foreach ($data as $equipe)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title text-danger">{{$equipe->nom}}</h5>
                          <p class="card-text">Nombre maximum de joueurs : {{$equipe->joueurs_max}}</p>
                        </div>
                        <a href="/show/{{$equipe->id}}">Voir les détails de l'équipe</a>
                      </div>
                </div>
                @if ($loop->iteration % 3 == 0)
                    </div>
                    <div class="row mt-3">
                @endif
            @endforeach
        </div>
    </section>
@endsection
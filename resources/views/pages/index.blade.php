@extends('template.template')

@section('content')
<section>
    <h1 class="text-center mt-5">Les équipes</h1>
    <div class="row m-0 mt-5 pb-4">
        @foreach ($data as $equipe)
        <div class="col-4">
            <div class="card border-dark m-auto text-center pb-4" style="width: 20rem; height: 12rem;">
                <div style="min-height: 1px; padding: 1.25rem;">
                    <h5 class="card-title text-danger font-weight-bold">{{$equipe->nom}}</h5>
                </div>
                <p class="card-text font-weight-bold">Nombre maximum de joueurs :
                    {{$equipe->joueurs->count()}} / {{$equipe->joueurs_max}}
                </p>
                <div class="d-flex m-auto">
                    <a href="/show/{{$equipe->id}}"
                        class="btn btn-success border border-muted p-2 text-white mr-2">Infos équipe</a>
                    <a href="/showJoueursEquipe/{{$equipe->id}}"
                        class="btn btn-success border border-muted p-2 text-white">Voir les joueurs</a>
                </div>
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
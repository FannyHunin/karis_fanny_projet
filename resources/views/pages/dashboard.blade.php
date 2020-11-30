@extends('template.template')

@section('content')
<h1 class="text-center mt-5" style="text-decoration: underline;">DashBoard</h1>
<div class="container mt-5 pt-5">
    {{-- 2 équipes remplies au Hasard --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 24rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">2 équipes remplies au Hasard</h3>
                @php($counter=1)
                @foreach ($equipes as $equipe)
                @if($equipe->joueurs->count() == $equipe->joueurs_max && $counter <=2) <h3>{{$equipe->nom}}</h3>
                    <span hidden>{{$counter++}}</span>
                    @endif
                    @endforeach
            </div>
        </div>
    </section>

    {{-- 2 équipes qui sont pas remplies au Hasard --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 33rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">2 équipes qui sont pas remplies au Hasard</h3>
                @php($counter=1)
                @foreach ($equipes as $equipe)
                @if($equipe->joueurs->count() < $equipe->joueurs_max && $counter <=2) <h3>{{$equipe->nom}}</h3>
                        <span hidden>{{$counter++}}</span>
                        @endif
                        @endforeach
            </div>
        </div>
    </section>

    {{-- 4 joueurs qui ont une équipe --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 23rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">4 joueurs qui ont une équipe</h3>
                @php($counter=1)
                @foreach ($joueurs as $joueur)
                @if($equipe->joueurs->count() && $counter <=4) <h3>{{$joueur->nom}} {{$joueur->prenom}}</h3>
                    <span hidden>{{$counter++}}</span>
                    @endif
                    @endforeach
            </div>
        </div>
    </section>

    {{-- Les équipes d'Europe --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 23rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">Les équipes d'Europe</h3>
                @foreach ($equipes as $equipe)
                @if($equipe->pays == 'Allemagne' || $equipe->pays == 'Belgique' || $equipe->pays == 'Autriche' ||
                $equipe->pays == 'Bulgarie' || $equipe->pays == 'Chypre' || $equipe->pays == 'Croatie' ||
                $equipe->pays == 'Danemark' || $equipe->pays == 'Australie')
                <h3>{{$equipe->nom}}</h3>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Les équipes Hors Europe --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 23rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">Les équipes Hors Europe</h3>
                @foreach ($equipes as $equipe)
                @if($equipe->pays == 'Japon' || $equipe->pays == 'Nouvelle-Zélande' || $equipe->pays == 'Rwanda' ||
                $equipe->pays == 'Singapour' || $equipe->pays == 'Corée du Sud' || $equipe->pays == 'Thaïlande' ||
                $equipe->pays == 'Uruguay')
                <h3>{{$equipe->nom}}</h3>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Les joueurs qui représentent leur pays --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 31rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">Les joueurs qui représentent leur pays</h3>
                @foreach ($joueurs as $joueur)
                @if($joueur->pays_origine == $joueur->equipe->pays) <h3>{{$joueur->nom}} {{$joueur->prenom}}</h3>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- 5 joueuses -> Femme --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 23rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">5 joueuses</h3>
                @php($counter=1)
                @foreach ($joueurs as $joueur)
                @if($joueur->genre == 'Femme' && $counter <=5) <h3>{{$joueur->nom}} {{$joueur->prenom}}</h3>
                    <span hidden>{{$counter++}}</span>
                    @endif
                    @endforeach
            </div>
        </div>
    </section>

    {{-- 5 joueurs -> Homme --}}
    <section>
        <div class="card mb-5 border-dark" style="width: 23rem;">
            <div class="card-body">
                <h3 class="mb-5 text-danger font-weight-bold">5 joueurs</h3>
                @php($counter=1)
                @foreach ($joueurs as $joueur)
                @if($joueur->genre == 'Homme' && $counter <=5) <h3>{{$joueur->nom}} {{$joueur->prenom}}</h3>
                    <span hidden>{{$counter++}}</span>
                    @endif
                    @endforeach
            </div>
        </div>
    </section>
</div>
@stop
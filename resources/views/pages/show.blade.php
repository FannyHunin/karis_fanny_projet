@extends('template')

@section('content')
    <section>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-danger">{{$equipeData->nom}}</h5>
              <h5 class="card-title font-weight-bold">{{$equipeData->pays}}</h5>
              <h5 class="card-title text-muted">{{$equipeData->ville}}</h5>
              <p class="card-text">Nombre maximum de joueurs : {{$equipeData->joueurs_max}}</p>
            </div>
          </div>
    </section>
@endsection
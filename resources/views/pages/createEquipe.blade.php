@extends('template.template')

@section('content')
<div class="container mt-4">
    <div>
        <div class="row">
            <div class="col-6">
                <form action="/store-equipe" method="post" class="d-flex flex-column mr-4">
                    @csrf
                    <div class="card border-dark p-3 px-5" style="width: 30rem;">
                        <h1 class="text-center">Ajouter une Équipe</h1>

                        <label for="" class="mt-3">Nom : </label>
                        <input type="text" name="nom" class="w-50" value="{{old('nom')}}">

                        <label for="" class="mt-3">Ville : </label>
                        <input type="text" name="ville" class="w-50" value="{{old('ville')}}">

                        <label for="" class="mt-3">Pays : </label>
                            <select name="pays" class="w-75">
                                @foreach ($dataEquipe as $item)
                                    <option value=" {{$item->pays}}">{{$item->pays}}</option>
                                @endforeach
                            </select>
                        <label for="" class="mt-3">Joueurs max : </label>

                        <input type="number" name="joueurs_max" class="w-25" value="{{old('joueurs_max')}}">

                        <button class="btn btn-primary w-25 mt-4 mb-2">Créer</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
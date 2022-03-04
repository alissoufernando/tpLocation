@extends('layouts.app-user')
@section('contenuutilisatteur')

        <div class="titre">NOS VOITURES</div>
        <div class="content">

            @foreach ($voiture as $voitures)

            <div class="voiture">
                <div class="voiturenom">{{$voitures->marque}} - {{$voitures->model}}</div>
                <div class="voitureprix">{{$voitures->getPrix()}}</div>
                <div class="voitureimg">
                    <img src="{{asset('storage')}}/{{ $voitures->pathImage }}" alt="cars">
                </div>
                    <a href="{{route('Ulocation.edit', $voitures->id)}}"><button>Louer</button></a>
            </div>
            @endforeach
            {{$voiture->links()}}
        </div>

@endsection

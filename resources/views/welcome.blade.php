@extends('layouts.app-user')

@section('imageHome')
<div class="suit" style="background-image: url('assets/img/location-vehicule-professionnel.jpg')">
     <a href="{{route('Uvoiture.index')}}"><button>LOUER UNE VOITURE</button></a>
</div>
@endsection

@section('contenuutilisatteur')

<div class="principal">
    <div class="car1">
        <div class="imgcar1">
            <img src="assets/img/voiture.png" alt="Berline">
        </div>
       <a href="{{route('Uvoiture.index')}}"> <button>LOUER UNE BERLINE</button></a>
    </div>
    <div class="car2">
        <div class="imgcar2">
            <img src="assets/img/voiture1.png" alt="Electrique">
        </div>
         <a href="{{route('Uvoiture.index')}}"><button>LOUER UNE ELECTRIQUE</button></a>
    </div>
    <div class="car3">
        <div class="imgcar3">
            <img src="assets/img/voiture2.png" alt="SUV">
        </div>
        <a href="{{route('Uvoiture.index')}}"><button>LOUER UNE SUV</button></a>
    </div>
</div>
<div class="prefoot">
    <button> <a href="{{route('Uvoiture.index')}}"><i class="fa fa-plus"></i> Voir plus</a></button>
</div>

@endsection

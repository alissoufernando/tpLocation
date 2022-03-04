@extends('layouts.app-user')
@section('contenuutilisatteur')

<div class="mission">
    <h3>Tout savoir sur nous</h3>
    <div class="miss">
        <h2>Notre Mission</h2>
            <p>
                En tant que l'un des principaux fournisseurs mondiaux de mobilité haut de gamme,
                <strong>CarRent</strong> a généré un chiffre d'affaires consolidé de 1,53 milliard d'euros en 2020
                malgré les restrictions de voyage et de sortie dues à la pandémie de COVID-19.
                Avec plus de 6 900 employés dans le monde, <strong>CarRent</strong> combine des solutions mondiales
                de location de voitures et de partage local, des services de transport en commun
                ainsi que des abonnements de voiture dans l'une des plus grandes plateformes de
                mobilité au monde. Avec une seule application - l'application <strong>CarRent</strong> - nous offrons
                à nos clients un accès numérique à plus de 200 000 véhicules et à environ 1,5 million
                de conducteurs connectés dans environ 110 pays à travers le monde. Outre sa propre
                gamme de véhicules, <strong>CarRent</strong> intègre également les services de plus de 1 500 partenaires
                de mobilité, forgeant ainsi une alliance stratégique, durable et pérenne pour la mobilité.
            </p>
            <p>
                Le courage de changer et la volonté de vraiment faire bouger les choses ont fait de <strong>CarRent</strong> ce qu'elle est
                aujourd'hui - l'une des entreprises de mobilité les plus innovantes, les plus dynamiques et les plus
                rentables au monde. Partout dans le monde, nous offrons à nos clients, toujours au centre de nos activités,
                une mobilité individuelle, flexible et illimitée au quotidien, créant une véritable alternative à leur propre
                voiture. <strong>CarRent</strong> – la mobilité qui bouge
            </p>
    </div>
    <div class="partners">
        <h2> Partenaires</h2>
        <div class="part">
            <img src="{{asset('assets/img/boa.png')}}" alt="">
            <div class="partext"></div>
        </div>
        <div class="part">
            <img src="{{asset('assets/img/logo-ecobank.jpg')}}" alt="">
            <div class="partext"></div>
        </div>
        <div class="part">
            <img src="{{asset('assets/img/ofmas.jpeg')}}" alt="">
            <div class="partext"></div>
        </div>
        <div class="part">
            <img src="{{asset('assets/img/sponsor.jpeg')}}" alt="">
            <div class="partext"></div>
        </div>
        <div class="part">
            <img src="{{asset('assets/img/honda.png')}}" alt="">
            <div class="partext"></div>
        </div>
        <div class="part">
            <img src="{{asset('assets/img/jeep.png')}}" alt="">
            <div class="partext"></div>
        </div>
    </div>
</div>

@endsection

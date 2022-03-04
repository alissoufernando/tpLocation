@extends('layouts.app-user')

@section('contenuutilisatteur')

<div class="titre">Veuillez remplir ce formulaire pour entrer en contact avec nous</div>
<div class="formular">
    <form action="">
        <div>
            <input type="text" name="pays" id="" placeholder="Pays">
        </div>
        <div>
            <input type="text" name="name" id="" placeholder="Nom complet">
        </div>
        <div>
            <input type="e-mail" name="email" id="" placeholder="Adresse e-mail">
        </div>
        <div>
            <input type="tel" name="tel" id="" placeholder="Numéro de téléphone">
        </div>
        <div>
            <input type="textarea" name="pays" id="" placeholder="Description de votre préoccupation">
        </div>
        <div>
           <button type="submit">Envoyer</button>
        </div>
    </form>
</div>

@endsection

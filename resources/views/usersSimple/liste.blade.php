@extends('layouts.default')

@section('title', 'Liste des utilisateurs')

@section('contenu')
<h1>Liste des utilisateur avec le contrôleur simple</h1>

<ul>
@foreach($utilisateurs as $user)
    <li>id: {{$user['id']}} nom: {{$user['name']}} mail: {{$user['email']}} </li>
@endforeach
</ul>

<a href="/form_ajout_utilisateur_avec_ctrl_simple">Ajouter un utilisateur</a>

@endsection
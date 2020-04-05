@extends('layouts.default')

@section('title', 'Liste des utilisateurs')

@section('contenu')
<h1>Suppression de l'utilisateur</h1>

<h2>Nouvelle liste: </h2>
<ul>
@foreach($utilisateurs as $user)
    <li>
        id: {{$user['id']}} nom: {{$user['name']}} mail: {{$user['email']}}
        <a href=""></a>
    </li>
@endforeach
</ul>

@endsection
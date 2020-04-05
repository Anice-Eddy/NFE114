@extends('layouts.default')

@section('title', 'Liste des utilisateurs')

@section('contenu')
<h1>Utilisateur : {{$utilisateur['name']}}</h1>

<h2>Informations</h2>
<ul>
@foreach($utilisateur as $key => $value)
    <li>{{$key}} : {{$value}}</li>
    @endforeach
    <a href="/users/{{$utilisateur['id']}}/edit">Modifier</a>
</ul>

@endsection
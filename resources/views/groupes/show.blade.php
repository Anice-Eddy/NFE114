@extends('layouts.default')

@section('title', 'Liste des groupes')

@section('contenu')
<h1>groupe : {{$groupe['name']}}</h1>

<h2>Informations</h2>
<ul>
@foreach($groupe as $key => $value)
    <li>{{$key}} : {{$value}}</li>
    @endforeach
    <a href="/groupes/{{$groupe['id']}}/edit">Modifier</a>
</ul>

@endsection
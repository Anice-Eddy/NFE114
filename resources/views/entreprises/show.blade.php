@extends('layouts.default')

@section('title', 'Liste des entreprises')

@section('contenu')
<h1>entreprise : {{$entreprise['name']}}</h1>

<h2>Informations</h2>
<ul>
@foreach($entreprise as $key => $value)
    <li>{{$key}} : {{$value}}</li>
    @endforeach
    <a href="/entreprises/{{$entreprise['id']}}/edit">Modifier</a>
</ul>

@endsection
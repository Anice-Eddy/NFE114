@extends('layouts.default')

@section('title', 'Liste des entreprises')

@section('contenu')
<h1>Suppression du entreprise</h1>

<h2>Nouvelle liste: </h2>
<ul>
@foreach($entreprises as $entreprise)
    <li>
        id: {{$entreprise['id']}} nom: {{$entreprise['name']}}
        <a href=""></a>
    </li>
@endforeach
</ul>

@endsection
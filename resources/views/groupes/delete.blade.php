@extends('layouts.default')

@section('title', 'Liste des groupes')

@section('contenu')
<h1>Suppression du groupe</h1>

<h2>Nouvelle liste: </h2>
<ul>
@foreach($groupes as $groupe)
    <li>
        id: {{$groupe['id']}} nom: {{$groupe['name']}}
        <a href=""></a>
    </li>
@endforeach
</ul>

@endsection
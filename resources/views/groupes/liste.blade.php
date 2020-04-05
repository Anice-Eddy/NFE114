@extends('layouts.default')

@section('title', 'Liste des groupes')

@section('contenu')
<h1>Liste des groupes</h1>

<ul>
@foreach($groupes as $groupe)
    <li>
        id:         {{$groupe['id']}}
        nom:        {{$groupe['name']}}
        <a href="/groupes/{{$groupe['id']}}">détails</a>
        <form action="/groupes/{{$groupe['id']}}" method="post">
            <input type="hidden" name="_method" value="delete">
            @csrf
            <input type="submit" value="supprimer">
        </form>
    </li>
@endforeach
</ul>
<p>
    <a href="/groupes/create">Ajouter un groupe</a>
</p>

@endsection
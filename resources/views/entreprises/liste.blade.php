@extends('layouts.default')

@section('title', 'Liste des entreprises')

@section('contenu')
<h1>Liste des entreprises</h1>
<div id="app">
    <entreprises></entreprises>
</div>
<p>
    <a href="/entreprises/create">Ajouter un entreprise</a>
</p>

@endsection
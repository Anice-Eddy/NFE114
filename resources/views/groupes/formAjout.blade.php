@extends('layouts.default')

@section('titre', 'Ajouter un groupe')

@section('contenu')
<h1>@yield('titre')</h1>
<form action="/groupes" method="post">
    @csrf
    <p>name:        <input type="text"      name="name" >   </p>
    <p><input type="submit" value="Envoyer"></p>
</form>
@endsection
@extends('layouts.default')

@section('titre', 'Ajouter un entreprise')

@section('contenu')
<h1>@yield('titre')</h1>
<form action="/entreprises" method="post">
    @csrf
    <p>name:        <input type="text"      name="name" >   </p>
    <p><input type="submit" value="Envoyer"></p>
</form>
@endsection
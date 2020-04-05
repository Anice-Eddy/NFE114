@extends('layouts.default')

@section('titre', 'Ajouter un utilisateur')

@section('contenu')
<h1>@yield('titre')</h1>
<form action="/users" method="post">
    @csrf
    <p>name:        <input type="text"      name="name" >   </p>
    <p>email:       <input type="email"     name="email">   </p>
    <p>Mot de passe:<input type="password"  name="password"></p>
    <p><input type="submit" value="Envoyer"></p>
</form>
@endsection
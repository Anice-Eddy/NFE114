@extends('layouts.default')

@section('titre', 'Ajouter un utilisateur')

@section('contenu')
<h1>@yield('titre')</h1>
<form action="/utilisateurs_avec_ctrl_simple" method="post">
    @csrf
    <p>id:          <input type="number"    name="id"   ></p>
    <p>name:        <input type="text"      name="name" ></p>
    <p>email:       <input type="email"     name="email"></p>
    <p>Mot de passe:<input type="password"  name="mdp"  ></p>
    <p><input type="submit" value="Envoyer"></p>
</form>
@endsection
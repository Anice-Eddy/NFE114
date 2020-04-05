@extends('layouts.default')

@section('titre', 'Ajouter un utilisateur')

@section('contenu')
<h1>@yield('titre')</h1>
<form action="/users/{{$utilisateur['id']}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <p>name:        <input type="text"      name="name"     value="{{$utilisateur['name']}}"></p>
    <p>email:       <input type="email"     name="email"    value="{{$utilisateur['email']}}"></p>
    <p>Mot de passe:<input type="password"  name="password" value="{{$utilisateur['password']}}"></p>
    <p><input type="submit" value="Modifier"></p>
</form>
@endsection
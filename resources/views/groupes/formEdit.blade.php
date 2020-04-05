@extends('layouts.default')

@section('titre', 'Ajouter un groupe')

@section('contenu')
<h1>@yield('titre')</h1>
<form action="/groupes/{{$groupe['id']}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <p>name:        <input type="text"      name="name"     value="{{$groupe['name']}}"></p>
    <p><input type="submit" value="Modifier"></p>
</form>
@endsection
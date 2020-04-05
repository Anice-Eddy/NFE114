@extends('layouts.default')

@section('titre', 'Ajouter un entreprise')

@section('contenu')
<h1>@yield('titre')</h1>
<form action="/entreprises/{{$entreprise['id']}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <p>name:        <input type="text"      name="name"     value="{{$entreprise['name']}}"></p>
    <p><input type="submit" value="Modifier"></p>
</form>
@endsection
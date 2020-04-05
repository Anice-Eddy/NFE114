@extends('layouts.default')

@section('title', 'Liste des utilisateurs')

@section('contenu')
<h1>Liste des utilisateur avec le contrôleur REST</h1>

<ul>
@foreach($utilisateurs as $user)
    <li>
        id:         {{$user['id']}}
        nom:        {{$user['name']}}
        mail:       {{$user['email']}}
        entreprise: {{$user->entreprise->name}}
        groupes:
        @foreach($user->groups as $group)
            {{$group->name}}
        @endforeach
        <a href="/users/{{$user['id']}}">détails</a>
        <form action="/users/{{$user['id']}}" method="post">
            <input type="hidden" name="_method" value="delete">
            @csrf
            <input type="submit" value="supprimer">
        </form>
    </li>
@endforeach
</ul>
<p>
    <a href="/users/create">Ajouter un utilisateur</a>
</p>

@endsection
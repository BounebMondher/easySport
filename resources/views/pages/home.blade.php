@extends('layouts.template')
@section("content")
<main role="main" class="inner cover" >
<h1 class="cover-heading">EasySport.</h1>
        <p class="lead">EasySport est un site de gestion d'équipes sportives, tournois, statistiques ...</p>
        <p class="lead">
            @guest
          <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">S'inscrire</a>
          <a href="{{ route('login') }}" class="btn btn-lg btn-secondary">Se connecter</a>
          @else
          bienvenu <b>{{ Auth::user()->name }}</b><br>
          <a href="/profile" class="btn btn-lg btn-secondary">Mon compte</a>
          @endguest
          
        </p>
      </main>
@endsection

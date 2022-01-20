@extends('userLayouts.template')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <H1><b>Bonjour  {{$user['first name']}}</b>, @if(count($teams)>0) voici vos équipe @else Vous n'avez pas encore rejoigné une équipe @endif</H1>
            <br>
            
            @foreach($teams as $team)
        <h2>{{$team['name']}}</h2>
            @endforeach
                
            
        </div>
    </div>
</div>
@endsection

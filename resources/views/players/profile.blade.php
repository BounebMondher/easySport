@extends('userLayouts.template')

@section('content')

{!! Form::open(['url' => 'foo/bar']) !!}

{!! Form::close() !!}

@endsection
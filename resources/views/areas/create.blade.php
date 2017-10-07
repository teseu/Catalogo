@extends('layout.layout')

@section('content')

  {!! Form::open(['url' => 'areas']) !!}
    @include('areas._form', ['submitButton' => 'Criar área'], ['tipo' => '2'])
  {!! Form::close() !!}

@include('errors.list')

@stop

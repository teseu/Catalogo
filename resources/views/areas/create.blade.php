@extends('layout.layout')

@section('content')

  {!! Form::open(['url' => 'areas']) !!}
    @include('areas._form', ['submitButton' => 'Criar área'], ['tipo' => '1'], ['nome' => 'Criar uma nova área'])
  {!! Form::close() !!}

@include('errors.list')

@stop

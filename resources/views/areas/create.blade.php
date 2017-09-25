@extends('layout.layout')

@section('content')

  {!! Form::open(['url' => 'areas']) !!}
    @include('areas._form', ['submitButton' => 'Criar área'])
  {!! Form::close() !!}

@include('errors.list')

@stop

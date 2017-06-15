@extends('layout.layout')

@section('content')

  {!! Form::open(['url' => 'area']) !!}
    @include('area._form', ['submitButton' => 'Criar área'])
  {!! Form::close() !!}

@include('errors.list')

@stop

@extends('layout.layout')

@section('content')

  {!! Form::model($area, ['method' => 'PATCH', 'action' => ['AreasController@update', $area->id]]) !!}
    @include('areas._form', ['submitButton' => 'Salvar'])
  {!! Form::close() !!}

@include('errors.list')

@stop

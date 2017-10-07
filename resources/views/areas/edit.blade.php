@extends('layout.layout')

@section('content')

  {!! Form::model($area, ['method' => 'PATCH', 'action' => ['AreasController@update', $area->id]]) !!}
    @include('areas._form', ['submitButton' => 'Salvar'], ['tipo' => $area->Area_Tipo])
  {!! Form::close() !!}

@include('errors.list')

@stop

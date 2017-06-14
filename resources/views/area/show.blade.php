@extends('layout.layout')

@section('content')

<div class="row-fluid sortable">
  <div class="box">
    <div class="box-header">
      <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>{{ $area->Area_Nome }}</h2>
      <div class="box-icon">
        <!-- <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a> -->
        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <h1><small>Nome do Setor: </small>{{ $area->Area_Nome }}</h1><br>
      <div class="row-fluid">
				<div class="span4">
          <h2><small>Titular da área: </small> {{ $area->Area_Titular }}</h2>
        </div>
				<div class="span4">
          <h2><small>Telefone da área: </small>{{ $area->Area_Telefone }}</h2>
        </div>
				<div class="span4">
          <h2><small>E-mail da área: </small>{{ $area->Area_Email }}</h2>
        </div>
      </div><br>
      <div class="row-fluid">
				<div class="span4">
          <h2><small>Secretária da área: </small>{{ $area->Area_Secretaria }}</h2>
        </div>
				<div class="span4">
          <h2><small>Apelido da área: </small>{{ $area->Area_Alias }}</h2>
        </div>
				<div class="span4">
          <h2><small>Skype da área: </small>{{ $area->Area_Skype }}</h2>
        </div>
      </div><br>
      <div class="row-fluid">
				<div class="span6">
          <h2><small>Endereço da área:</small></h2>
          <h2>  {!! $area->Area_Endereco !!}</h2>
        </div>
				<div class="span6">
          <h2><small>Logo da Área:</small></h2><img src="http://placehold.it/200x96" class="img-responsive media-object img-rounded">
        </div>
      </div>
    </div>
  </div><!--/span-->
</div><!--/row-->

@stop

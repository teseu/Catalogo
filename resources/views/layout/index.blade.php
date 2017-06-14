@extends('layout.layout')

@section('content')
<div class="box">
  <div class="box-header">
    <h2><i class="halflings-icon white list"></i><span class="break"></span>Principal</h2>
  </div>
  <div class="jumbotron jumbotron-fluid container-fluid">
    <h1 class="display-3">Bem vindo!</h1>
    <p class="lead">Página inicial do Catálogo onlide da Prefeitura de Paracambi.</p>
    <hr class="my-4">
    <p>Os contatos das áreas cadastradas, com telefone, e-mail, endereço e nomes de titulares.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/area" role="button">Comece aqui</a>
    </p>
  </div>
</div>
@stop

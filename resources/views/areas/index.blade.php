@extends('layout.layout')

@section('content')

<div class="row-fluid sortable">
  <div class="box">
    <div class="box-header">
      <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Áreas</h2>
      <div class="box-icon">
        <!-- <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a> -->
        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <table class="table table-bordered table-striped table-condensed">
          <thead>
            <tr>
              <th>#</th>
              <th>Área</th>
              <th>Titular</th>
              <th>Telefone</th>
              <th>E-mail</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($areas as $area)
            <tr>
              <td>
                {{ $area->id }}
              </td>
              <td>
                <a href="{{ url('/areas', $area->Area_Alias) }}">{{ $area->Area_Nome }}</a>
              </td>
              <td>
                {{ $area->Area_Titular }}
              </td>
              <td>
                {{ $area->Area_Telefone }}
              </td>
              <td>
                {{ $area->Area_Email }}
              </td>
              <td>
                <ul class="inline">
                  <li>{{ link_to_route('areas.edit', '', [$area->id], array('class'=>'halflings-icon pencil')) }}</li>
                  <li><a href="#" class="btn-setting"><i class="halflings-icon remove"></i></a></li>
                </ul>
              </td>
            </tr>

          @endforeach

          </tbody>
       </table>
       <!-- <div class="pagination pagination-centered">
        <ul>
        <li><a href="#">Prev</a></li>
        <li class="active">
          <a href="#">1</a>
        </li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Next</a></li>
        </ul>
      </div> -->
    </div>
  </div><!--/span-->
</div><!--/row-->

@stop

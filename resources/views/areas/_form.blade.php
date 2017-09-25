<div class="box">
<div class="box-header">
  <h2><i class="halflings-icon white check"></i><span class="break"></span>Criar nova área</h2>
  <div class="box-icon">
    <!-- <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a> -->
    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
  </div>
</div>
<div class="box-content">
<div class="row-fluid">
  <div class="form-group span6">
    {!! Form::label('Area_Nome', 'Nome da área:', ['class' => 'form-control']) !!}
    {!! Form::text('Area_Nome', null, ['class' => 'form-control span12']) !!}
  </div>
  <div class="form-group span6">
    {!! Form::label('Area_Titular', 'Titular da área:', ['class' => 'form-control']) !!}
    {!! Form::text('Area_Titular', null, ['class' => 'form-control span12']) !!}
  </div>
</div>
<div class="row-fluid">
  <div class="form-group span6">
    {!! Form::label('Area_Secretaria', 'Secretária:') !!}
    {!! Form::text('Area_Secretaria', null, ['class' => 'form-control span12']) !!}
  </div>
  <div class="form-group span6">
    {!! Form::label('Area_Telefone', 'Telefone:') !!}
    {!! Form::tel('Area_Telefone', null, ['class' => 'form-control span12']) !!}
  </div>
<div class="row-fluid">
  <div class="form-group span6">
    {!! Form::label('Area_Email', 'E-mail da área:') !!}
    {!! Form::email('Area_Email', null, ['class' => 'form-control span12']) !!}
  </div>
  <div class="form-group span6">
    {!! Form::label('Area_Skype', 'Skype da área:') !!}
    {!! Form::text('Area_Skype', null, ['class' => 'form-control span12']) !!}
  </div>
</div>
<div class="row-fluid">
  <div class="form-group span6">
    {!! Form::label('Area_Tipo', 'Tipo da área:') !!}
    {!! Form::select('Area_Tipo',
      array(
      'Estrutura' => array('1' => 'Secretaria', '2' => 'Subsecretaria'),
      'Saúde' => array('3' => 'Hospital', '4' => 'Clínica'),
      'Educação' => array('5' => 'Escola', '6' => 'Creche', '7' => 'Universidade'),
      ),
      ['class' => 'form-control span12']
    ) !!}
  </div>
  <div class="form-group span6">
    {!! Form::label('Area_Alias', 'Apelido da área:') !!}
    {!! Form::text('Area_Alias', null, ['class' => 'form-control span12']) !!}
  </div>
</div>
<div class="row-fluid">
  <div class="form-group span6">
    {!! Form::label('Area_Endereco', 'Endereço da área da área:') !!}
    {!! Form::textarea('Area_Endereco', null, ['class' => 'form-control span12']) !!}
  </div>
  <div class="form-group span6">
    {!! Form::label('Area_Logo', 'Logo da área:') !!}
    <img src="http://placehold.it/200x96" class="img-responsive media-object img-rounded">
    <!-- {!! Form::file('Area_Logo', ['class' => 'form-control span12']) !!} -->
    {!! Form::text('Area_Logo', null, ['class' => 'form-control span12']) !!}
  </div>
</div>
{!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
</div>
</div><!--/span-->
</div><!--/row-->

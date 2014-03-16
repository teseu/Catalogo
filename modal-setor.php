<?php 

  include("misc.inc");
  include("setor.php");
  $con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server3");


 ?>


<div id="modalSetor" class="modal fade modalSetor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Detalhes do Setor</h4>
        </div>
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Setor</a></li>
              <li><a href="#tab2" data-toggle="tab">Editar Setor</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">

                
                <div class="modal-body">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        <div class="brand">
                        <h3><input type="text" name="setorId" id="setorId" value=""/><?php echo "$nomesetor_m" ?></h3>
                        </div>
                      </div>
                       <table class="table">
                         <thead>
                            <tr>
                              <th>Nome Curto</th>
                              <th>Titular</th>
                              <th>Secretária</th>
                              <th>Telefone</th>
                              <th>E-mail</th>
                              
                              <th>Skype</th>
                             
                              
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><?php echo "$aliassetor_m" ?></td>
                              <td><?php echo "$titularsetor_m" ?></td>
                              <td><?php echo "$secretariasetor_m" ?></td>
                              <td><?php echo "$telefonesetor_m" ?></td>
                              <td><?php echo "$emailsetor_m" ?></td>
                              
                              <td><?php echo "$skypesetor_m" ?></td>
                              
                              
                            </tr>
                            <tr>
                            <tr>
                          </tbody>
                       </table>
                      
                  </div>
                </div>
                <div class="row">
                  <div class="brand col-md-2">
                    <img src="http://placehold.it/150x75" alt="Logo do Setor" class="img-responsive media-object img-rounded">
                   </div>
                   <div class="col-md-5">
                    <h4>Endereço</h4>
                     <p>
                     <?php echo "$enderecosetor_m" ?>
                     </p>
                   </div>
                 </div>
                
              </div> 
              <div class="tab-pane fade in" id="tab2">
                <div class="row" style="margin: 20px 0 0 30px;">
                  <div class="col-md-3"><input class="col-md-10 form-control" type="text" placeholder="Setor"></div>
                  <div class="col-md-3"><input class="col-md-10 form-control" type="text" placeholder="Titular"></div>
                  <div class="col-md-3"><input class="col-md-10 form-control" type="text" placeholder="Secretária"></div>
                </div>
                <div class="row" style="margin: 20px 0 0 30px;">
                  <div class="col-md-3"><input class="col-md-10 form-control" type="text" placeholder="Nome Curto"></div>
                  <div class="col-md-3"><input class="col-md-10 form-control" type="text" placeholder="E-mail"></div>
                  <div class="col-md-3"><input class="col-md-10 form-control" type="text" placeholder="Skype"></div>
                </div>
                <div class="row" style="margin: 20px 0 0 20px;">
                  <div class="col-md-4">
                    <span class="btn btn-file">Selecione uma imagem
                      <input type="file" class="form-control" placeholder="Selecione uma imagem">
                    </span>
                  </div>
                  <div class="col-md-5"><textarea class="form-control" rows="3">Endereço</textarea></div>
          </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Editar</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
              </div>
      </div><!-- final do modal-content -->
    </div><!-- final do modal-dialog -->
    </div>

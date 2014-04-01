<?php 

  include("misc.inc");
  include("setor.php");
  $con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em setor-lista");

 ?>
<div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Setor</a></li>
              <li><a href="#tab2" data-toggle="tab">Editar Setor</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        <div class="brand">
                        <h3><?php echo "$nomesetor_m" ?></h3>
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
                <form>
                <div class="row" style="margin: 20px 0 0 30px;">
                  <div class="form-group col-md-3">
                    <label for="nomesetor_m">Setor</label>
                    <input class="form-control" type="text" value='<?php echo "$nomesetor_m "; ?>' name="nomesetor_m" id="nomesetor_m">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="titularsetor_m">Titular</label>
                    <input class="form-control" type="text" value='<?php echo "$titularsetor_m "; ?>' name="titularsetor_m" id="titularsetor_m">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="secretariasetor_m">Secretária</label>
                    <input class="form-control" type="text" value='<?php echo "$secretariasetor_m "; ?>' name="secretariasetor_m" id="secretariasetor_m">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="aliassetor_m">Nome curto</label>
                    <input class="form-control" type="text" value='<?php echo "$aliassetor_m "; ?>' name="aliassetor_m" id="aliassetor_m">
                  </div>
                </div>
                <div class="row" style="margin: 20px 0 0 30px;">
                  <div class="form-group col-md-3">
                    <label for="emailsetor_m">E-mail</label>
                    <input class="form-control" type="text" value='<?php echo "$emailsetor_m "; ?>' name="emailsetor_m" id="emailsetor_m">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="skypesetor_m">Skype</label>
                    <input class="form-control" type="text" value='<?php echo "$skypesetor_m "; ?>' name="skypesetor_m" id="skypesetor_m">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="enderecosetor_m">Endereço</label>
                    <textarea class="form-control" rows="2" name="enderecosetor_m" id="enderecosetor_m"><?php echo "$enderecosetor_m "; ?></textarea>
                  </div>

                </div>
                <fieldset class="row" style="margin: -40px 0 0 30px;">
                <legend>Imagem</legend>
                  <div class="form-group col-md-3">
                      <img src="http://placehold.it/150x75" alt="Logo do Setor" class="img-responsive media-object img-rounded"> 
                  </div>   
                   <div class="form-group col-md-3"> 
                      <label for="logosetor_m">Caminho</label>
                      <input type="text" class="form-control col-md-10" id="logosetor_m" value='<?php echo "$logosetor_m" ?>'>
                  </div>
                  <div class="form-group col-md-3"> 
                      <label for="logosetor_n">Nova imagem</label>
                      <span class="btn btn-file"> 
                      <input type="file" class="form-control" placeholder="Selecione uma imagem">
                     </span>
                  </div>
              </fieldset>
              <div class="modal-footer">
                  <input type="submit" class="btn btn-default" name="Salvar" value="Salvar">
                  <button type="button" class="btn btn-primary" href="#tab1" data-toggle="tab">Cancelar</button>
              </div>
              </form>
              </div>
              
        </div>
</div>


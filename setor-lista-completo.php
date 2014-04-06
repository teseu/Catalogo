<?php 

  include("misc.inc");
  include("setor.php");
  include("tipo.php");
  $con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em setor-lista");

 ?>

<div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Detalhes do Setor</a></li>
              <li <?php if($_SESSION['logado']): echo '><a href="#tab2" data-toggle="tab">Editar Setor</a>'; else: echo ">"; endif; ?></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        <div class="brand col-md-6">
                        <h3><?php echo "$nomesetor_m" ?></h3>
                        </div>
                        <div class="col-md-4 text-right">
                          <h5>Tipo: <strong><?php echo "$descricaotipo_m" ?></strong></h5>
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
                    <img src='<?php echo "$logosetor_m" ?>' alt="Logo do Setor" class="img-responsive media-object img-rounded">
                   </div>
                   <div class="col-md-5">
                    <h4>Endereço</h4>
                     <p>
                     <?php echo "$enderecosetor_m" ?>
                     </p>
                   </div>
                 </div>
                
              </div> 
              <?php if($_SESSION['logado']): ?>
              <div class="tab-pane fade in" id="tab2">
                <form method="post" action="index.php?page=ed-setor" enctype="multipart/form-data">
                <input type="hidden" value='<?php echo "$idsetor_m "; ?>' name="idsetor_i" id="idsetor_i" />
                <div class="row" style="margin: 20px 0 0 30px;">
                  <div class="form-group col-md-3">
                    <label for="nomesetor_m">Setor</label>
                    <input class="form-control" type="text" value='<?php echo "$nomesetor_m "; ?>' name="nomesetor_i" id="nomesetor_i">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="titularsetor_m">Titular</label>
                    <input class="form-control" type="text" value='<?php echo "$titularsetor_m "; ?>' name="titularsetor_i" id="titularsetor_i">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="secretariasetor_m">Secretária</label>
                    <input class="form-control" type="text" value='<?php echo "$secretariasetor_m "; ?>' name="secretariasetor_i" id="secretariasetor_i">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="aliassetor_m">Nome curto</label>
                    <input class="form-control" type="text" value='<?php echo "$aliassetor_m "; ?>' name="aliassetor_i" id="aliassetor_i">
                  </div>
                </div>
                <div class="row" style="margin: 20px 0 0 30px;">
                  <div class="form-group col-md-3">
                    <label for="tiposetor_m">Tipo</label><br>
                    <select class="form-control " name="tiposetor_i">
                      <?php 
                        while ($lista_t = mysqli_fetch_array($lista_tipo)) {
                        $idtipo_l = $lista_t[0];
                        $desctipo_l = $lista_t[1];
                        echo "
                          <option value='$idtipo_l'"; if ($tiposetor_m == $idtipo_l) echo "selected"; echo " ;> $desctipo_l </option>
                        ";
                      }

                       ?> 
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="emailsetor_m">E-mail</label>
                    <input class="form-control" type="text" value='<?php echo "$emailsetor_m "; ?>' name="emailsetor_i" id="emailsetor_i">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="skypesetor_m">Skype</label>
                    <input class="form-control" type="text" value='<?php echo "$skypesetor_m "; ?>' name="skypesetor_i" id="skypesetor_i">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="telefoneesetor_m">Telefone</label>
                    <input class="form-control" type="text" value='<?php echo "$telefonesetor_m "; ?>' name="telefonesetor_i" id="telefonesetor_i">
                  </div>
                  

                </div>
                <div class="row" style="margin: 20px 0 0 30px;">
                  <div class="form-group col-md-5">
                    <label for="enderecosetor_m">Endereço</label>
                    <textarea class="form-control" rows="2" name="enderecosetor_i" id="enderecosetor_i"><?php echo "$enderecosetor_m "; ?></textarea>
                  </div>
                    
                   <div class="form-group col-md-3"> 
                      <label for="logosetor_m">Caminho</label>
                      <input type="text" class="form-control col-md-10" id="logosetor_i" value='<?php echo "$logosetor_m" ?>' name="logosetor_i">
                  </div>
                  <div class="form-group col-md-4 text-right">
                      <img src='<?php echo "$logosetor_m" ?>' alt="Logo do Setor" class="img-responsive media-object img-rounded"> 
                  </div> 
                  
              </div >
              <div class="modal-footer">
                  <input type="submit" class="btn btn-default" name="Salvar" value="Salvar">
                  <button type="button" class="btn btn-primary" href="#tab1" data-toggle="tab">Cancelar</button>
              </div>
              </form>
              </div>
              <?php endif; ?>
        </div>
</div>

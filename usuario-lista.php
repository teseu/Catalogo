<?php 

  include("misc.inc");
  include("usuario.php");
  $con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Não foi possível conectar ao banco de dados em lista de usuario!");

 ?>
<?php if($_SESSION['logado']): ?>
<div class="row">
 <div class="col-md-12">
   <div class="panel panel-default">
     <div class="panel-heading">Usuarios</div>
      <table class="table">
        <thead>
           <tr>
             <th>#</th>
             <th>Id</th>
             <th>Nome</th>
             <th>Login</th>
             <th>Acesso</th>
           </tr>
         </thead>
         <tbody>

<?php


$i = 1;
while ($list = mysqli_fetch_array($lista_usuario)) {
$num_c = $i++;
$id_c = $list[0];
$nome_c = $list[1];
$login_c = $list[2];
$senha_c = $list[3];

echo "<tr>
<td>$num_c</td>
<td>$id_c</td>
<td><a href='index.php?page=usuario-lista-ed&id_p=$id_c' rel='tooltip' data-original-title='Clique para editar' 
class='btn' id='$id_c'>
$nome_c
</a></td>
<td>$login_c</td>
<td>Não definido</td>
</tr>";

}
?>

           <tr>
           <tr>
         </tbody>
      </table>
    </div>
  </div>
</div>
<?php else: ?>
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Atenção!</strong> Página de acesso restrito. Efetue login ou procure o administrador do sistema.
  </div>
<?php endif; ?>
<?php 

  include("misc.inc");
  include("usuario.php");
  $con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server3");

 ?>

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
             <th>Senha</th>
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
<td><a href='principal.php?page=usuario-lista-ed&id_p=$id_c' rel='tooltip' data-original-title='Clique para editar' 
class='btn' id='$id_c'>
$nome_c
</a></td>
<td>$login_c</td>
<td>$senha_c</td>
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
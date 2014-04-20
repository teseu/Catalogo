<?php 

  include("misc.inc");
  include("tipo.php");
  $con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em setor-lista");

 ?>

<div class="row">
 <div class="col-md-12">
   <div class="panel panel-default">
     <div class="panel-heading">
      <div class="col-md-10" id="panel-title">
        Tipos de Setores 
      </div>
      <div class="col-md-2 text-right" id="panel-btn">
        <a href="index.php?page=tipo-lista-inc"><img src="img/edit_add.png"></a>
      </div>
     </div>
      <table class="table">
        <thead>
           <tr>
             <th>#</th>
             <th>Tipo</th>
             <th>Observação</th>
           </tr>
         </thead>
         <tbody>

<?php


$i = 1;
while ($list = mysqli_fetch_array($lista_tipo)) {
$num_c = $i++;
$id_c =  $list[0];
$tipo_c = $list[1];
$observacao_c = $list[2];


echo "<tr>
<td>$num_c</td>
<td>
	<a href='index.php?page=tipo-lista-ed&id_p=$id_c' rel='tooltip' data-original-title='Clique para editar' 
		class='btn' id='$id_c'>
		$tipo_c
	</a> 
</td>
<td>$observacao_c</td>
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
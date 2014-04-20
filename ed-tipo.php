<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve ed-tipo");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$id_i = $_POST['id_i'];
$tipo_i = $_POST['tipo_i'];
$observacao_i = $_POST['observacao_i'];
$enviar_i = $_POST['enviar'];

if(isset($tipo_i)) {
	$tipo_atualizar = "UPDATE Tipo SET Tipo_Descricao ='$tipo_i', Tipo_Observacao ='$observacao_i' 
WHERE `Tipo_Id`='$id_i'
 ";

$result = mysqli_query($con,$tipo_atualizar)
       or die (mysqli_error());
       
       echo "<div class='alert alert-success alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  				O tipo foi atualizado com sucesso! Veja a <a href='index.php?page=tipo-lista' class='alert-link'>lista</a>
</div>

       ";
}
else {
	echo "
<div class='alert alert-warning alert-dismissable'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  	<strong>Atenção!</strong> Ocorreu um erro na alteração do tipo.
</div>";
}

?>
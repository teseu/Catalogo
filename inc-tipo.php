<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve inc-usuario");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );


$id_i = NULL;
$tipo_i = $_POST['tipo_i'];
$observacao_i = $_POST['observacao_i'];
$enviar_i = $_POST['enviar'];

if(isset($tipo_i)) {
$tipo_incluir = "INSERT INTO Tipo (Tipo_Id, Tipo_Descricao, Tipo_Observacao ) 
VALUES ( '$id_i', '$tipo_i', '$observacao_i' 
) ";

$result = mysqli_query($con,$tipo_incluir)
       or die (mysqli_error());
       
       echo "
<div class='alert alert-success alert-dismissable'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  	O tipo foi inserido com sucesso! Deseja <a href='index.php?page=tipo-lista-inc' class='alert-link'>inserir outro?</a>
</div>

       ";
}
else {
	echo "
<div class='alert alert-warning alert-dismissable'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  	<strong>Atenção!</strong> Ocorreu um erro na inclusão do tipo.
</div>
";
}

?>
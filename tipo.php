<?php 

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em tipo");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$tipo = "SELECT Tipo_Id, Tipo_Descricao, Tipo_Observacao 
FROM Tipo ";

  $lista_tipo = mysqli_query($con,$tipo)
       or die (mysqli_error());


$id_p = $_REQUEST['id_p'];

if(isset($id_p)) {
$tipo_informado = "SELECT Tipo_Id, Tipo_Descricao, Tipo_Observacao 
FROM Tipo 
WHERE Tipo_Id = $id_p ";

	$lista_tipo_informado = mysqli_query($con,$tipo_informado)
       or die (mysqli_error());

while ($list = mysqli_fetch_array($lista_tipo_informado)) {
$idtipo_e = $list[0];
$tipo_e = $list[1];
$observacao_e = $list[2];
}
}
 ?>


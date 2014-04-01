<?php 

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em tipo");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$tipo = "SELECT Tipo_Id, Tipo_Descricao
FROM Tipo ";

  $lista_tipo = mysqli_query($con,$tipo)
       or die (mysqli_error());

 ?>

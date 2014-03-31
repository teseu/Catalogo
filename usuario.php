<?php 

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em usuario");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$usuario = "SELECT Usuario_Id, Usuario_Nome, Usuario_Login, Usuario_Senha
FROM Usuario
ORDER BY Usuario_Nome ";

  $lista_usuario = mysqli_query($con,$usuario)
       or die (mysqli_error());

 ?>

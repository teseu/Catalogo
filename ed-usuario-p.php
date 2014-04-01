<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve ed-usuario-p");
#mysql_set_charset('utf8',$con);
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$id_p = $_REQUEST['id_p'];

if(isset($id_p)) {
$usuario_editar = "SELECT * FROM Usuario 
WHERE Usuario_Id = $id_p
 ";

$usuario_e = mysqli_query($con,$usuario_editar)
       or die (mysqli_error());

while ($list = mysqli_fetch_array($usuario_e)) {
	$id_e = $list[0];
	$nome_e = $list[1];
	$login_e = $list[2];
	$senha_e = $list[3];

}
}
else {
	echo "Id não setado na pesquisa";
}


?>
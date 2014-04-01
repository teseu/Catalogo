<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve inc-usuario");
mysql_set_charset('utf8',$con);
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );


$id_i = $_POST['id_i'];
$nome_i = $_POST['nome_i'];
$login_i = $_POST['login_i'];
$senha_i = md5($_POST['senha_i']);
$enviar_i = $_POST['enviar'];

if(isset($id_i)) {
$usuario_incluir = "INSERT INTO Usuario (Usuario_Id, Usuario_Nome, Usuario_Login, Usuario_Senha ) 
VALUES ( '$id_i', '$nome_i', '$login_i', '$senha_i' 
) ";

$result = mysqli_query($con,$usuario_incluir)
       or die (mysqli_error());
       
       echo "O usuário foi inserido com sucesso!<br><br>
       Deseja <a href=\"principal.php?page=usuario-lista-inc\">inserir outro?</a>";
}
else {
	echo "nada";
}

?>
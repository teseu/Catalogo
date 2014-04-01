<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve ed-usuario");
mysql_set_charset('utf8',$con);
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$id_i = $_POST['id_i'];
$nome_i = $_POST['nome_i'];
$login_i = $_POST['login_i'];
$senha_i = md5($_POST['senha_i']);
$enviar_i = $_POST['enviar'];

if(isset($id_i)) {
$usuario_atualizar = "UPDATE Usuario SET Usuario_Nome ='$nome_i', Usuario_Login ='$login_i', Usuario_Senha ='$senha_i'
WHERE `Usuario_Id`='$id_i'
 ";

$result = mysqli_query($con,$usuario_atualizar)
       or die (mysqli_error());
       
       echo "O usuário foi atualizado com sucesso!<br><br>
       Veja a <a href=\"principal.php?page=usuario-lista\">lista</a>";
}
else {
	echo "Id não setado";
}

?>
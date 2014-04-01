<?php
session_start();
include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Não foi possível conectar ao servidor em login!");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$login = (isset($_POST['login_p'])) ? $_POST['login_p'] : '';
$senha = (isset($_POST['senha_p'])) ? md5($_POST['senha_p']) : '';


if (isset($_POST['login_p'])) { 

$logar = mysqli_query($con,"SELECT * FROM Usuario WHERE Usuario_Login = '$login' AND Usuario_Senha = '$senha' ");

while ($logado_u = mysqli_fetch_array($logar)) {
$idusuario_l = $logado_u[0];
$nomeusuario_l = $logado_u[1];
$loginusuario_l = $logado_u[2];
$senhausuario_l = $logado_u[3];
}

$conta = mysqli_num_rows($logar);

if($conta == 1 ) {
$_SESSION['login'] = $login;
$_SESSION['usuario'] = $nomeusuario_l;
header('location: index.php?page=alert-login');
}
else {
	unset ($_SESSION['login']);
	header('location: index.php?page=alert-erro-login');
	echo "não logado";
}
}

?>
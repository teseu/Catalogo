<?php
session_start();
include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em login");
mysql_set_charset('utf8',$con);
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$login = (isset($_POST['login_p'])) ? $_POST['login_p'] : '';
$senha = (isset($_POST['senha_p'])) ? $_POST['senha_p'] : '';


if (isset($_POST['login_p'])) { 

$logar = mysqli_query($con,"SELECT * FROM Usuario WHERE Usuario_Login = '$login' AND Usuario_Senha = '$senha' ");

$conta = mysqli_num_rows($logar);

if($conta == 1 ) {
$_SESSION['login'] = $login;
header('location: principal.php?page=alert-login');
}
else {
	unset ($_SESSION['login']);
	header('location: principal.php?page=alert-erro-login');
	echo "não logado";
}
}

?>
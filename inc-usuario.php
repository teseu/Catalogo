<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve inc-usuario");
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
       
       echo "
<div class='alert alert-success alert-dismissable'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  	O usuário foi inserido com sucesso! Deseja <a href='index.php?page=usuario-lista-inc' class='alert-link'>inserir outro?</a>
</div>

       ";
}
else {
	echo "
<div class='alert alert-warning alert-dismissable'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  	<strong>Atenção!</strong> Ocorreu um erro na inclusão do usuário.
</div>
";
}

?>
<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve ed-usuario");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$id_i = $_POST['id_i'];
$nome_i = $_POST['nome_i'];
$login_i = $_POST['login_i'];
$senha_i = md5($_POST['pass_confirmation']);
$verifica_senha = $_POST['pass_confirmation'];
$enviar_i = $_POST['enviar'];

if(isset($id_i)) {
	if (strlen($verifica_senha) > 0) {
$usuario_atualizar = "UPDATE Usuario SET Usuario_Nome ='$nome_i', Usuario_Login ='$login_i', Usuario_Senha ='$senha_i'
WHERE `Usuario_Id`='$id_i'
 ";
}
else {
	$usuario_atualizar = "UPDATE Usuario SET Usuario_Nome ='$nome_i', Usuario_Login ='$login_i' 
WHERE `Usuario_Id`='$id_i'
 ";
}
$result = mysqli_query($con,$usuario_atualizar)
       or die (mysqli_error());
       
       echo "<div class='alert alert-success alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  				O usuário foi atualizado com sucesso! Veja a <a href='index.php?page=usuario-lista' class='alert-link'>lista</a>
</div>

       ";
}
else {
	echo "
<div class='alert alert-warning alert-dismissable'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  	<strong>Atenção!</strong> Ocorreu um erro na alteração do usuário.
</div>";
}

?>
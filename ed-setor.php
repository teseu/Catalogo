<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to serve ed-setor");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$idsetor_i = $_POST['idsetor_i'];
$nomesetor_i = $_POST['nomesetor_i'];
$tiposetor_i = $_POST['tiposetor_i'];
$titularsetor_i = $_POST['titularsetor_i'];
$telefonesetor_i = $_POST['telefonesetor_i'];
$emailsetor_i = $_POST['emailsetor_i'];
$skypesetor_i = $_POST['skypesetor_i'];
$enderecosetor_i = $_POST['enderecosetor_i'];
$logosetor_i = $_POST['logosetor_i'];
$aliassetor_i = $_POST['aliassetor_i'];
$secretariasetor_i = $_POST['secretariasetor_i'];
$enviar_i = $_POST['Salvar'];

if(isset($enviar_i)) {
$setor_atualizar = "UPDATE Setor SET Setor_Nome ='$nomesetor_i', Setor_Tipo ='$tiposetor_i', 
Setor_Titular ='$titularsetor_i', Setor_Telefone ='$telefonesetor_i', 
Setor_Email ='$emailsetor_i', Setor_Skype ='$skypesetor_i', 
Setor_Endereco ='$enderecosetor_i', Setor_Logo ='$logosetor_i', 
Setor_Alias ='$aliassetor_i', Setor_Secretaria ='$secretariasetor_i'
WHERE `Setor_Id`='$idsetor_i'
 ";
$result = mysqli_query($con,$setor_atualizar)
       or die (mysqli_error());
       
       echo "<div class='alert alert-success alert-dismissable'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  				O setor foi atualizado com sucesso! Veja a <a href='index.php?page=setor-lista' class='alert-link'>lista</a>
</div>

       ";
}
else {
	echo "
<div class='alert alert-warning alert-dismissable'>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  	<strong>Atenção!</strong> Ocorreu um erro na alteração do setor.
</div>";
}

?>
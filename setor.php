<?php

include("misc.inc");


$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em Setor");
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$busca = $_REQUEST['busca'];
$tipo_setor = $_GET['tipo'];

if(isset($busca)) { 
$setor_curto = "SELECT Setor_Id, Setor_Nome, Setor_Titular, Setor_Telefone, Setor_Email, Setor_Alias 
FROM Setor
WHERE Setor_Nome LIKE '%$busca%' OR Setor_Alias LIKE '%$busca%'
ORDER BY Setor_Id ";
}
elseif (isset($tipo_setor)) {
$setor_curto = "SELECT Setor_Id, Setor_Nome, Setor_Titular, Setor_Telefone, Setor_Email
FROM Setor
WHERE Setor_Tipo = $tipo_setor
ORDER BY Setor_Id ";	
}
else { 
$setor_curto = "SELECT Setor_Id, Setor_Nome, Setor_Titular, Setor_Telefone, Setor_Email
FROM Setor
ORDER BY Setor_Id ";
}



  $lista_setor_curto = mysqli_query($con,$setor_curto)
       or die (mysqli_error());


$setor_completo = "SELECT Setor_Id, Setor_Nome, Setor_Titular, Setor_Telefone, Setor_Email, 
Setor_Skype, Setor_Endereco, Setor_Logo, Setor_Alias, Setor_Secretaria 
FROM Setor
ORDER BY Setor_Nome ";

$setor_in = $_REQUEST['id_p'];

if(isset($setor_in)) { 
$setor_informado = "SELECT Setor_Id, Setor_Nome, Setor_Tipo, Tipo_Descricao, Setor_Titular, Setor_Telefone, 
Setor_Email, Setor_Skype, Setor_Endereco, Setor_Logo, Setor_Alias, Setor_Secretaria 
FROM Setor, Tipo 
WHERE Setor.Setor_Tipo = Tipo.Tipo_Id AND Setor.Setor_Id = $setor_in
ORDER BY Setor.Setor_Nome ";


$lista_setor_informado = mysqli_query($con,$setor_informado)
       or die (mysqli_error());

while ($list = mysqli_fetch_array($lista_setor_informado)) {
$idsetor_m = $list[0];
$nomesetor_m = $list[1];
$tiposetor_m = $list[2];
$descricaotipo_m = $list[3];
$titularsetor_m = $list[4];
$telefonesetor_m = $list[5];
$emailsetor_m = $list[6];
$skypesetor_m = $list[7];
$enderecosetor_m = $list[8];
$logosetor_m = $list[9];
$aliassetor_m = $list[10];
$secretariasetor_m = $list[11];

}
}
else {
	if (isset($id_c)) { 
$setor_informado = "SELECT Setor_Id, Setor_Nome, Setor_Titular, Setor_Telefone, Setor_Email, 
Setor_Skype, Setor_Endereco, Setor_Logo, Setor_Alias, Setor_Secretaria 
FROM Setor
WHERE Setor_Id = $id_c
ORDER BY Setor_Nome ";	

$lista_setor_modal = mysqli_query($con,$setor_informado)
       or die (mysqli_error());

while ($list = mysqli_fetch_array($lista_setor_modal)) {
$idsetor_m = $list[0];
$nomesetor_m = $list[1];
$titularsetor_m = $list[2];
$telefonesetor_m = $list[3];
$emailsetor_m = $list[4];
$skypesetor_m = $list[5];
$enderecosetor_m = $list[6];
$logosetor_m = $list[7];
$aliassetor_m = $list[8];
$secretariasetor_m = $list[9];

}
}

  //echo "Id setor informado não setado";
}










?>
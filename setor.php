<?php

include("misc.inc");

$con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server em Setor");
mysql_set_charset('utf8',$con);
mysqli_query( $con, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );

$busca = $_REQUEST['busca'];

if(isset($busca)) { 
$setor_curto = "SELECT Setor_Id, Setor_Nome, Setor_Titular, Setor_Telefone, Setor_Email, Setor_Alias 
FROM Setor
WHERE Setor_Nome LIKE '%$busca%' AND Setor_Alias LIKE '%$busca%'
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

if(isset($id_p)) { 
$setor_informado = "SELECT Setor_Id, Setor_Nome, Setor_Titular, Setor_Telefone, Setor_Email, 
Setor_Skype, Setor_Endereco, Setor_Logo, Setor_Alias, Setor_Secretaria 
FROM Setor
WHERE Setor_Id = $id_p
ORDER BY Setor_Nome ";

$lista_setor_informado = mysqli_query($con,$setor_informado)
       or die (mysqli_error());

while ($list = mysqli_fetch_array($lista_setor_informado)) {
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
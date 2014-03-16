<?php 

  include("misc.inc");
  include("setor.php");
  $con = mysqli_connect($host,$user,$passwd,$dbname)
   or die ("Couldn't connect to server3");

 ?>

<div class="row">
 <div class="col-md-12">
   <div class="panel panel-default">
     <div class="panel-heading">Setores e Endereços</div>
      <table class="table">
        <thead>
           <tr>
             <th>#</th>
             <th>Setor</th>
             <th>Titular</th>
             <th>Telefone</th>
             <th>E-mail</th>
           </tr>
         </thead>
         <tbody>

<?php


$i = 1;
while ($list = mysqli_fetch_array($lista_setor_curto)) {
$num_c = $i++;
$id_c = $list[0];
$setor_c = $list[1];
$titular_c = $list[2];
$telefone_c = $list[3];
$email_c = $list[4];

echo "<tr>
<td>$num_c</td>
<td><buttom rel='tooltip' data-original-title='Clique para ver detalhes' 
class='open-modalSetor btn btn-default' role='button' id='$id_c' data-toggle='modal' data-target='#modalSetor'>
$setor_c
</buttom></td>
<td>$titular_c</td>
<td>$telefone_c</td>
<td>$email_c</td>
</tr>";

}
?>

           <tr>
           <tr>
         </tbody>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).on("click", ".open-modalSetor", function () {

  var meuSetorId = $(this).data('id');
  $(".modal-body #setorId").value(meuSetorId);

});
    </script>


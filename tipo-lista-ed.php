<?php 
include("misc.inc"); 
include("tipo.php"); 
?>
<?php if($_SESSION['logado']): ?>
<form method="post" action="index.php?page=ed-tipo" enctype="multipart/form-data">
	<div class="tab-pane fade in" id="tab2">
	  <div class="row" style="margin: 20px 0 0 30px;">
	    <div><input type="hidden" name="id_i" value='<?php echo "$idtipo_e"; ?>'></div>
	    <div class="col-md-3">
	    	<input class="col-md-12 form-control" type="text" placeholder="Tipo" value='<?php echo "$tipo_e"; ?>' 
	    	name="tipo_i">
	    </div>
	    <div class="col-md-5">
	    	<input class="col-md-12 form-control" type="text" placeholder="Observação" value='<?php echo "$observacao_e"; ?>' 
	    	name="observacao_i">
	    </div>
	  </div>
	</div>
	<div class="modal-footer">
	    <input type="submit" class="btn btn-primary" value="Salvar" />
	    <a href="index.php?page=tipo-lista">
	    	<button type="button" class="btn btn-default">Cancelar</button>
	    </a>
	</div>
</form>
<?php else: ?>
	<div class="alert alert-warning alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  		<strong>Atenção!</strong> Página de acesso restrito. Efetue login ou procure o administrador do sistema.
	</div>
<?php endif; ?>
<?php include("misc.inc"); ?>
<?php include("ed-usuario-p.php"); ?>

<form method="post" action="principal.php?page=ed-usuario" enctype="multipart/form-data">
	<div class="tab-pane fade in" id="tab2">
	  <div class="row" style="margin: 20px 0 0 30px;">
	    <div class="col-md-2"><input class="col-md-12 form-control" type="text" name="id_i"
	     value='<?php echo "$id_e"; ?>'></div>
	    <div class="col-md-4"><input class="col-md-12 form-control" type="text" name="nome_i"
	    value='<?php echo "$nome_e"; ?>'></div>
	    <div class="col-md-3"><input class="col-md-12 form-control" type="text" name="login_i"
	    value='<?php echo "$login_e"; ?>'></div>
	    <div class="col-md-3"><input class="col-md-12 form-control" type="password" name="senha_i"
	    value='<?php echo "$senha_e"; ?>'></div>
	  </div>	  
	</div>
	<div class="modal-footer">
	    <input type="submit" class="btn btn-primary" value="Salvar" />
	    <a href="principal.php?page=usuario-lista">
	    	<button type="button" class="btn btn-default">Cancelar</button>
	    </a>
	</div>
</form>
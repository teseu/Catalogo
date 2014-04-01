<?php include("misc.inc"); ?>

<form method="post" action="principal.php?page=usuario-lista-ed" enctype="multipart/form-data">
	<div class="tab-pane fade in" id="tab2">
	  <div class="row" style="margin: 20px 0 0 30px;">
	  	<p>Pesquise</p>
	    <div class="col-md-2"><input class="col-md-12 form-control" type="text" placeholder="Id" name="id_p"></div>
	  </div>
	</div>
	<div class="modal-footer">
	    <input type="submit" class="btn btn-primary" value="Pesquisar" />
	    <a href="index.php?page=usuario-lista">
	    	<button type="button" class="btn btn-default">Cancelar</button>
	    </a>
	</div>
</form>
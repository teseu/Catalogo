<?php include("misc.inc"); ?>
<?php if($_SESSION['logado']): ?>
<form method="post" action="index.php?page=inc-usuario" enctype="multipart/form-data">
	<div class="tab-pane fade in" id="tab2">
	  <div class="row" style="margin: 20px 0 0 30px;">
	    <div class="col-md-1"><input class="col-md-12 form-control" type="text" placeholder="Id" name="id_i"></div>
	    <div class="col-md-4"><input class="col-md-12 form-control" type="text" placeholder="Nome" name="nome_i"></div>
	    <div class="col-md-3"><input class="col-md-12 form-control" type="text" placeholder="Login" name="login_i"></div>
	    <div class="col-md-2"><input class="col-md-12 form-control" type="password" placeholder="Senha" 
	    name="pass_confirmation" data-validation="strength" data-validation-strength="1" data-validation-optional="true"></div>
	    <div class="col-md-2"><input class="col-md-12 form-control" type="password" placeholder="Confirme Senha" 
	    name="pass" data-validation="confirmation" data-validation-optional="true"></div>
	  </div>
	</div>
	<div class="modal-footer">
	    <input type="submit" class="btn btn-primary" value="Salvar" />
	    <a href="index.php?page=usuario-lista">
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
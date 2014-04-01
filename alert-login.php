<?php session_start(); ?>
<div class="alert alert-success alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  	Bem-vindo <strong> <?php print($_SESSION['login']) ; ?>!</strong> O login foi efetuado com sucesso no sistema.
</div>
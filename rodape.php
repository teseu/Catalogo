<?php session_start(); ?>
<footer>
  <div class="navbar navbar-default navbar-fixed-bottom navbar-inverse">
    <div class="row"> 
    	<div class="col-md-8">
         <h4><a class="brand" href="#">Catálogo online - Prefeitura de Paracambi</a></h4>
        </div> 
        <?php if($_SESSION['logado']): ?>
        <div class="col-md-4">
         <span class="navbar-text navbar-right">Logado como <a href="#" class="navbar-link"> <?php print($_SESSION['usuario']) ; ?> </a></span>
        </div>
        <?php endif; ?>
      </div>
  </div>
</footer>
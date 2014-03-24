<?php session_start(); ?>
<div class="row">
    <div class="col-md-2" id="logo">
      <a href="index.html" title="Catálogo online">
        <img src="http://placehold.it/200x96" alt="Catálogo online" class="img-responsive media-object img-rounded">
      </a>
    </div>
    <div class="col-md-6">
      <h1>Prefeitura de Paracambi</h1>
    </div>
    <?php if(!$_SESSION['logado']): ?>
    <div class="col-md-4 text-right" id="modal-login" style="margin-top: 20px;">
      <a href="#modalLogin" role="button" class="btn btn-primary" data-toggle="modal">Login</a>
    </div>
  <?php else: ?>
    <div class="col-md-4 text-right" id="modal-login" style="margin-top: 20px;">
      <a href="logout.php" role="button" class="btn btn-warning">Logout</a>
    </div>
    <?php endif; ?>
</div>
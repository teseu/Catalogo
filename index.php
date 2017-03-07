<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Catálogo online - Prefeitura da Paracambi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--<link href="css/jquery.min.css" rel="stylesheet" media="screen"> -->
    <link href="css/template.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->

  </head>

  <body data-spy="scroll" data-target=".navbar-ex1-collapse">
  <?php 

if ($_SESSION['login']) {
  $_SESSION['logado'] = true;
 
}

 ?>
  <?php require_once("modal-login.php"); ?>
  
  <div class="container">
  	<?php require_once("cabecalho.php"); ?>
  	<?php require_once("menu.php"); ?>
    <?php
   if(!isset($_GET['page']))
  require_once("inicio.php");
  else
  require_once($_GET['page'].".php");
  ?>

  	<?php require_once("rodape.php"); ?>	
  </div>

  <!-- Arquivos Javascripts
    ================================================== -->
    <!-- jQuery direto do local -->
    <script src="js/jquery.min.js"></script>
     <!-- jQuery form validator online -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>

    <script>
      $.validate({
        modules : 'security',
        onModulesLoaded : function() {
          var optionalConfig = {
            fontSize: '12pt',
            padding: '4px',
            bad : 'Muito fraca',
            weak : 'Fraca',
            good : 'Boa',
            strong : 'Forte'
          };

          $('input[name="pass_confirmation"]').displayPasswordStrength(optionalConfig);
        }
      });
    </script>
    <!-- jQuery direto do CDN (somente online) -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(function () {
          $("[rel='tooltip']").tooltip();
      });
      $(function () {
        $("[rel='popouver']").popover();
      });
      
    </script>
   
  </body>
</html>

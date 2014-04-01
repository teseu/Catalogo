<?php 
session_start();
include("tipo.php");

 ?>
<div class="row" style="margin-top: 20px;">
        <div class="col-md-12">
          <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li <?php if(!isset($_GET['page'])){ echo "class='active'";} ?>><a href="index.php">Início</a></li>
                <li <?php if($_GET['page'] == 'setor-lista') {echo "class='active dropdown'";} else {echo "class='dropdown'";} ?>>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setores <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="index.php?page=setor-lista">Listar todos</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Tipos</li>
                     <?php 
                        while ($lista_t = mysqli_fetch_array($lista_tipo)) {
                        $idtipo_l = $lista_t[0];
                        $desctipo_l = $lista_t[1];
                        echo "
                          <li><a href='index.php?page=setor-lista&tipo=$idtipo_l'> $desctipo_l </a></li>
                        ";
                      }

                       ?> 
                    </ul>
                </li>
                <?php if($_SESSION['logado']): ?>
                <li <?php if($_GET['page'] == 'usuario-lista-inc' or $_GET['page'] == 'usuario-lista' )
                 {echo "class='active dropdown'";} else {echo "class='dropdown'";} ?>>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções de Usuários <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="index.php?page=usuario-lista">Listar todos</a></li>
                    <li><a href="index.php?page=usuario-lista-inc">Incluir</a></li>
                  </ul>
                </li>
              <?php endif; ?>
              </ul>
              <form class="navbar-form pull-right hidden-xs" role="search" action="index.php?page=setor-lista"
               method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Digite o nome do setor..." name="busca">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div><!--final navbar-collapse -->
          </div><!--final da navbar-->
        </div><!--final da coluna-->
      </div>
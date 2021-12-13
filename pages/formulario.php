<?php
require '../backend_php/classes/connectmysql.php';
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Cabeçalho da página.-->
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Desafio do COTIC 2021">
    <meta name="keywords" content="HTML, CSS, jQuery, Javascript, PHP, MySQL">
    <meta name="author" content="Vitor G. Dantas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Formulario</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  </head>
  <!-- Corpo da página. As alterações principais serão feitas nessa área. -->
  <body class="main-bg">
    <!-- O menu principal no topo da página. -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light transparent">
      <a class="navbar-brand" href="http://proeg.ufpa.br/cotic" target="blank" 
        ><img src="../assets/logo_cotic.fw.png" width="256" height="64" alt=""
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado"
        aria-expanded="false"
        aria-label="Alterna navegação"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php" id="itemmenu"><i class="bi bi-house-fill"></i> Início <span class="sr-only">(página atual)</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#formulario" id="itemmenu"><i class="bi bi-file-earmark-fill"></i> Formulário</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="lista.php" id="itemmenu"><i class="bi bi-list-ul"></i> Lista</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Possível novo conteúdo deve ser adicionado aqui.-->
    <div class="formulario" id="formulario" align="center">
      <h1 align="center">Cadastre um Personagem</h1>
      <?php 
      session_start();
         if(isset($_SESSION['msg'])){
             echo $_SESSION['msg'];
             unset($_SESSION['msg']);
            }
      ?>
      <form action="../backend_php/api/registrar.php" method="post" role="form">
        <div class="container">
          <div class="row">
            <div class="col" align="left">
              <label for="nome" class="form-label">Nome do Personagem</label>
              <input type="text" class="form-control" name="nome" aria-describedby="nome" placeholder="Digite o nome do personagem" maxlength="50" required>
            </div>
            <div class="col col-lg-2" align="left">
              <label for="idade" class="form-label">Idade</label>
              <input type="number" class="form-control" name="idade" aria-describedby="idade" required>
            </div>
          </div>
          <div class="row">
            <div class="col" align="left">
              <label for="codinome" class="form-label">Codinome</label>
              <input type="text" class="form-control" name="codinome" aria-describedby="codinome" placeholder="Digite codinome do personagem" maxlength="50" required>
            </div>
            <div class="col" align="left">
              <label for="pessoa" class="form-label">Ator/Atriz</label>
              <input type="text" class="form-control" name="pessoa" aria-describedby="pessoa" placeholder="Digite o nome do ator ou da atriz" maxlength="50" required>
            </div>
          </div>
          <div class="row">
          <span>Defina o alinhamento</span>
          </div>
          <div class="row"> 
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio" value="theboys" checked>
              <label class="form-check-label" for="radio1">
                The Boys
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio" value="super">
              <label class="form-check-label" for="radio2">
                Super
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio" value="2" disabled>
              <label class="form-check-label" for="radio3">
                Ambos
              </label>
            </div>
          </div>
          <div class="row">
            <span>Biografia do personagem</span>
          </div>
          <div class="row">
              <textarea class="form-control" name="biografia" rows="5" placeholder="Descreva a biografia do personagem"></textarea>
          </div>
        </div>
      <button type="submit" class="btn btn-primary"><i class="bi bi-upload"></i> Cadastrar</button>
      </form>
    </div>
    <footer>
      <p align="center" style="margin-bottom: 0">Status <i class="bi bi-server"></i>: <?php echo $resultconn; ?></p>
      <p align="center">Desafio COTIC 2021 - Desenvolvido por Vitor '<a href="https://github.com/r0t1v" target="blank">r0t1v</a>' Gabriel</p>
    </footer>
    <!-- Adição de scripts do Bootstrap. Não deve ser alterado.-->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<?php
require '../backend_php/classes/connectmysql.php';
$theboyscont=0;
$supescont=0;
$resultcontboys = mysqli_query($conn,"SELECT COUNT(alinhamento) boys FROM personagens WHERE alinhamento='theboys'");
$queryboys = mysqli_fetch_assoc($resultcontboys);
$theboyscont = $queryboys['boys'];
$resultcontsupes = mysqli_query($conn,"SELECT COUNT(alinhamento) supes FROM personagens WHERE alinhamento='super'");
$querysupes = mysqli_fetch_assoc($resultcontsupes);
$supescont= $querysupes['supes'];
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Cabeçalho da página.-->
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Desafio do COTIC 2021">
    <meta name="keywords" content="HTML, CSS, jQuery, Javascript, PHP, MySQL">
    <meta name="author" content="Vitor G. Dantas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>The Boys 3</title>
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
            <a class="nav-link" href="formulario.php" id="itemmenu"><i class="bi bi-file-earmark-fill"></i> Formulário</a>
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
    <div class="mainfront">
      <h1 align="center">VENHA CONHECER A VERDADEIRA FACE POR TRÁS DOS HÉROIS DA VOUGHT!</h1>
      <div class="container">
        <div class="row">
          <div class="col" id="theboystatus" align="center">
            <i class="bi bi-sunglasses"></i><p>The Boys Cadastrados</p><p><?php echo $theboyscont; ?></p>
          </div>
          <div class="col" id="supesstatus" align="center">
            <i class="bi bi-lightning-charge-fill"></i><br><p>Supes Cadastrados</p><p><?php echo $supescont; ?></p>
          </div>
        </div>
      </div>
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

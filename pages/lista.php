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
    <title>Lista</title>
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
            <a class="nav-link" href="#lista" id="itemmenu"><i class="bi bi-list-ul"></i> Lista</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Possível novo conteúdo deve ser adicionado aqui.-->
     <div class="lista" style="background-color: white" id="lista">
      <h1 align="center" style="font-family: Bebas Neue; font-size: 64px; color: black">Lista dos personagens cadastrados</h1>
          <table border="1">
            <thead>
              <th style="width: 20%; background-color: black; color: white"> Nome</th>
              <th style="width: 20%; background-color: black; color: white"> Codinome</th>
              <th style="width: 20%; background-color: black; color: white"> Intérprete</th>
              <th style="width: 7%; background-color: black; color: white"> Idade</th>
              <th style="width: 20%; background-color: black; color: white"> Alinhamento</th>
              <th style="width: 10%; background-color: black; color: white"> Biografia</th>
            </thead>
            <tbody id="tabela">
              <?php
              $sql="SELECT nome,idade,codinome,interprete,alinhamento,biografia FROM personagens";
              $consulta = mysqli_query($conn,$sql);
              while($exibe = mysqli_fetch_assoc($consulta)) {
              if($exibe["alinhamento"]=="theboys"){
                echo "<td><span style='color:blue'>".$exibe["nome"]."</span></td>";
                echo "<td><span style='color:blue'>".$exibe["codinome"]."</td>";
                echo "<td><span style='color:blue'>".$exibe["interprete"]."</td>";
                echo "<td><span style='color:blue'>".$exibe["idade"]."</td>";
                echo "<td><span style='color:blue'>".$exibe["alinhamento"]."</td>";
                echo "<td><span style='color:blue'>".$exibe["biografia"]."</td>";
                echo "<tr>";
              }
              else{
                echo "<td><span style='color:red'>".$exibe["nome"]."</span></td>";
                echo "<td><span style='color:red'>".$exibe["codinome"]."</span></td>";
                echo "<td><span style='color:red'>".$exibe["interprete"]."</span></td>";
                echo "<td><span style='color:red'>".$exibe["idade"]."</span></td>";
                echo "<td><span style='color:red'>".$exibe["alinhamento"]."</span></td>";
                echo "<td><span style='color:red'>".$exibe["biografia"]."</span></td>";
                echo "<tr>";
              }
              }
              ?>
            </tbody>
          </table>
        </div>
    <footer>
      <p align="center" style="margin-bottom: 0">Status <i class="bi bi-server"></i>: <?php echo $resultconn; ?></p>
      <p align="center">Desafio COTIC 2021 - Desenvolvido por Vitor '<a href="https://github.com/r0t1v" target="blank">r0t1v</a>' Gabriel</p>
    </footer>
    <!-- Adição de scripts do Bootstrap. Não deve ser alterado.-->
    <script src="../js/tabela.js"></script>
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

<?php

namespace projeto\projetoEstacionamento\php;

require_once("Entrada.php");

use projeto\projetoEstacionamento\php\ControllerEntrada;





?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo2.css">
   
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ESTACIONAMENTO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="indexEntrada.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ControllerEntrada.php">Entradas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ControllerSaida.php">Saídas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ControllerMensalista.php">Mensalistas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Inicial.php">Sair</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <header>
    <h1>Entrada</h1>
</header>
<br><br>
    <form method="POST">
        <label for="">Código: </label>
        <input type="number" id="codigo" name="codigo"> <br><br>

        <label for="">Nome: </label>
        <input type="text" id="nome" name="nome"> <br><br>

        <label for="">Telefone: </label>
        <input type="number" id="telefone" name="telefone"> <br><br>

        <label for="">Placa: </label>
        <input type="text" id="placa" name="placa"> <br><br>

        <label for="">Data: </label>
        <input type="date" id="data" name="data"> <br><br>

        <label for="">Hora: </label>
        <input type="time" id="hora" name="hora"> <br><br>

        <button>Confirmar Entrada!
            <?php
                try{
                    $_SESSION['codigo']  = $_POST['codigo'];
                    $_SESSION['nome']  = $_POST['nome'];
                    $_SESSION['telefone']  = $_POST['telefone'];
                    $_SESSION['placa']  = $_POST['placa'];
                    $_SESSION['data']  = $_POST['data'];
                    $_SESSION['hora']  = $_POST['hora'];

                    $_SESSION['entrada']  = new Entrada ($_SESSION['codigo'] ,$_SESSION['nome'] ,$_SESSION['telefone'] ,$_SESSION['placa'] , $_SESSION['data'] , $_SESSION['hora'] );
                  }catch(exeption $erro){
                      echo $erro;
                  } // fim do try-catch
              ?>
              </button> <br><br>

        <?php
            echo "Entrada Confirmada com sucesso! <br>";
            echo $_SESSION['entrada'] ->imprimir();
            echo "<br><BR>Imprimindo nota... <br>"
        ?>
        </form> 





  </body>
</html>
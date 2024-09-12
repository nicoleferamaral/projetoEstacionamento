<?php

namespace projeto\projetoEstacionamento\php;

require_once("Cliente.php");

use projeto\projetoEstacionamento\php\ControllerMensalista;


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo2.css">
    <script>
    function funcao1()
    {
    alert("Pagamento feito com sucesso! \n Imprimindo nota..");
    }
    </script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ESTACIONAMENTO</a>
    <button class="navbar-toggler" type="button" endereco-bs-toggle="collapse" endereco-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="indexRelatorio.php">Home</a>
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
    <h1>Mensalistas</h1>
</header>
<br><br>
    <form method="POST">
      <h2> Cadastrar </h2>
      <br><br>
        <label for="">Código: </label>
        <input type="number" id="codigo" name="codigo"> <br><br>

        <label for="">Nome: </label>
        <input type="text" id="nome" name="nome"> <br><br>

        <label for="">Telefone: </label>
        <input type="text" id="telefone" name="telefone"> <br><br>

        <label for="">CPF: </label>
        <input type="text" id="cpf" name="cpf"> <br><br>

        <label for="">Endereço: </label>
        <input type="text" id="endereco" name="endereco"> <br><br>

        <label for="">Marca: </label>
        <input type="text" id="marca" name="marca"> <br><br>

        <label for="">Placa: </label>
        <input type="text" id="placa" name="placa"> <br><br>

        <label for="">Cor: </label>
        <input type="text" id="cor" name="cor"> <br><br>


        <label for="">Data de Pagamento: </label>
        <input type="date" id="data" name="data"> <br><br>

        <label for="">Valor Mensal: </label>
        <input type="text" id="valor" name="valor"> <br><br>


        <button>Cadastrar
            <?php
                try{
                    $codigo = $_POST['codigo'];
                    $nome = $_POST['nome'];
                    $telefone = $_POST['telefone'];
                    $cpf = $_POST['cpf'];
                    $endereco = $_POST['endereco'];
                    $marca = $_POST['marca'];
                    $placa = $_POST['placa'];
                    $cor = $_POST['cor'];
                    $data = $_POST['data'];
                    $valor = $_POST['valor'];


                    $cliente1 = new Cliente ($codigo,$nome,$telefone,$cpf, $endereco, $marca, $placa, $cor,$data,$valor);
                  }catch(exeption $erro){
                      echo $erro;
                  } // fim do try-catch
              ?>
              </button> <br><br>

        <?php
            echo "Cadastro confirmado com sucesso!";
            echo $cliente1->imprimir();
            
        ?>
        </form>

        <br><br>

        <form method="POST">
       <section class="pagamento">
       
        <h3>PAGAMENTO</h3>
        <br><br>
        <div class="radio-container">
      <label for="radio">
        <input type="radio" id="radio" name="radio" />
        <div class="custom-radio">
          <span></span>
        </div>
        <span>Pix</span>
      </label>
    </div>
    <div class="radio-container">
      <label for="radio1">
        <input type="radio" id="radio1" name="radio" />
        <div class="custom-radio">
          <span></span>
        </div>
        <span>Cartão de débito</span>
      </label>
    </div>
    <div class="radio-container">
      <label for="radio2">
        <input type="radio" id="radio2" name="radio" />
        <div class="custom-radio">
          <span></span>
        </div>
        <span>Cartão de Crédito</span>
      </label>
    </div>
    <div class="radio-container">
      <label for="radio3">
        <input type="radio" id="radio3" name="radio" />
        <div class="custom-radio">
          <span></span>
        </div>
        <span>Dinheiro</span>
      </label>
    </div> <br><br><br>
    <input class="imprimir1" onclick="funcao1()" value="Pagar"/>

    </section>
    </form> 



  </body>
</html>
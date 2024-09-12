<?php

    namespace projeto\projetoEstacionamento\php;

    require_once("Entrada.php");
    require_once("Saida.php");
    require_once("Main.php");


    use projeto\projetoEstacionamento\php\ControllerSaida;
    use projeto\projetoEstacionamento\php\Saida;
    use projeto\projetoEstacionamento\php\Main;

    class ControllerSaida{

      function mensagem($mensa){
        return "OK";
      }
    }


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
    alert("Pagamento feito com sucesso!\n Imprimindo nota..");
    }
    </script>
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
          <a class="nav-link " aria-current="page" href="indexSaida.php">Home</a>
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
      <h1>Saída</h1>
    </header>

    <div id="entrada"> <p>    
      <?php
            echo $entrada1->imprimir();
            
        ?>
        </p></div>

        <br><br>
    <form method="POST">
        <label for="">Data da Saída: </label>
        <input type="date" id="data" name="data"> <br><br>

        <label for="">Hora da Saída: </label>
        <input type="int" id="hora" name="hora"> <br><br>

        <button>Confirmar Saída!
            <?php
                try{
                    $dataSaida = $_POST['data'];
                    $horaSaida = $_POST['hora'];

                    $saida1 = new Saida ($dataSaida, $horaSaida);

                    function pagar($horaSaida){
                      $total = $horaSaida-8.00;
                      if($total<1){
                          return "O total fica R$5,00 
                          ";
                      } else {
                          $preco=($horaSaida-8.00)*10;
                          return "O total fica R$".$preco;
                      }
                  }
                    
                  }catch(exeption $erro){
                      echo $erro;
                  } // fim do try-catch
        
              ?>
              </button> <br><br>

        <?php
            echo "".pagar($horaSaida);
            echo"<br><br><br>"; 
            
        ?>
       </form>
       <br><br><br>
                  
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
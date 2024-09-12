<?php
      namespace projeto\projetoEstacionamento\php;


      require_once("Main.php");
  
      use projeto\projetoEstacionamento\php\Main;

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
    alert("Relatório imprimido com sucesso!");
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
      <h1>Home</h1>
    </header>
    <br>
    <h2>04/09/2024</h2>

   <section id="relatorio">
      <h4> Entradas </h4>
      <?php
        echo $entrada1->imprimir();
      ?>
      <br><br><br>
      
    </section>

    <section id="relatorio">
      <h4> Saídas </h4>
       <p><br> Código: 519 <br>Nome: Nicole<br>Telefone: 119999999<br>Placa: NIC1234<br>Data: 04/09/2024<br>Hora: 08:00<br>Data de saída: 04/09/2024<br>Hora de saída: 09:00<br>Valor total: R$10,00</p>
      </section>
    

       <section id="relatorio">
      <h4> Mensalistas </h4>
     
    </section>

    <section id="relatorio">
      <h4> Funcionarios </h4>
      <?php
        echo $func1->imprimir();
      ?>
      <br><br><br>
      <?php
        echo $func2->imprimir();
      ?>
    
    </section>


    <input class="imprimir" onclick="funcao1()" value="Imprimir Relatório"/>

  





  </body>
</html>
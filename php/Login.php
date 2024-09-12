<?php

   namespace Projeto\projetoEstacionamento\php;

   Use Projeto\projetoEstacionamento\php\Login;
 

   class Cliente {
    protected string $codigo;

    function __construct(string $codigo){
        $this->codigo = $codigo;
    }
        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim do get

        public function __set(string $name, mixed $value):void
        {
            $this->name = $value;
        }//fim do set

        public function imprimir():string
        {
            
            return  "<br>Código: ".$this->codigo;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de funcionario</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
<header>
        <h1> Login de Funcionários </h1>
    </header>

    <form method="POST">
    <button class="custom-btn btn1"><a href="Inicial.php">Voltar</a></button > <br>
    <br>
    <br><br> <br> 

    <section class="login">
    <label for="">Email: </label>
        <input type="text" id="codigo" name="codigo"> <br><br>
        <label for="">Senha: </label>
        <input type="password" id="codigo" name="codigo"> <br><br>

        <button class="custom-btn btn-9">Confirmar. . . 
            <?php
                try{
                    $codigo = $_POST['codigo'];
                }catch(exeption $erro){
                    echo $erro;
                } // fim do try-catch

                function validar($codigo){

                    if($codigo==123){
                        return "<br> <br><br><br><br>
                        <br><br><br><br><br><button class='custom-btn btn-9'><a href='index.php'>Entrar</a></button > <br>";
                        
                    }
            
                        
                }
            ?>
            <br><br><br><br> <br><br>
        <?php
            echo "".validar($codigo);
        ?>

    
    </form>
    </section>

</body>
</html>
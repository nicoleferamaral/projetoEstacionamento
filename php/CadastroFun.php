<?php

namespace projeto\projetoEstacionamento\php;

require_once("Funcionario.php");
use projeto\projetoEstacionamento\php\CadastroFun;
use projeto\projetoEstacionamento\php\Funcionario;

class CadastroFun extends Funcionario{
    protected $login;

    public function __construct(    int $codigo,
    string $nome,
    string $cpf,
    string $telefone,
    string $endereco,
    string $cargo,
    string $setor,
    float $salario,
    string $login,
    string $senha){
        parent::__construct($codigo,$nome,$cpf,$telefone,$endereco,$cargo,$setor,$salario);
            $this->login = $login;
            $this->senha = $senha;
    }

    
    public function __get(string $name):mixed
    {
        return $this->name;
    }//fim dos gets

    public function __set(string $name, mixed $value):void
    {
        $this->$name = $value;
    }//fim do set

    public function imprimir():string
    {
        
        return parent::imprimir().
               "<br><br>login: ".$this->login. 
               "<br><br>senha: ".$this->senha;

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="estilo2.css">
    <script>
    function funcao1()
    {
    alert("Funcionário cadastrado com sucesso!\nImprimindo nota..");
    }
    </script>
</head>
<body>
    <header>
        <h1> Cadastro de Funcionários </h1>
    </header>

    <form method="POST">
    <button class="custom-btn btn1"><a href="Inicial.php">Voltar</a></button > <br>
    <br>
    <br><br> <br>
        <label for="">Código: </label>
        <input type="number" id="codigo" name="codigo"> <br><br>

        <label for="">Nome: </label>
        <input type="text" id="nome" name="nome"> <br><br>

        <label for="">CPF: </label>
        <input type="text" id="cpf" name="cpf"> <br><br>

        <label for="">Telefone: </label>
        <input type="text" id="telefone" name="telefone"> <br><br>

        <label for="">Endereço: </label>
        <input type="text" id="endereco" name="endereco"> <br><br>

        <label for="">Cargo: </label>
        <input type="text" id="cargo" name="cargo"> <br><br>

        <label for="">Setor: </label>
        <input type="text" id="setor" name="setor"> <br><br>

        <label for="">Salário: </label>
        <input type="float" id="salario" name="salario"> <br><br>

        <label for="">Login do Funcionário: </label>
        <input type="text" id="login" name="login"> <br><br>

        <label for="">Senha do Funcionário: </label>
        <input type="password" id="senha" name="senha"> <br><br><br> <br> <br> <br>

        <button class="custom-btn btn-9">Confirmar dados!
            <?php
              try{
                $_SESSION['codigo'] = $_POST['codigo'];
                $_SESSION['nome'] = $_POST['nome'];
                $_SESSION['cpf'] = $_POST['cpf'];
                $_SESSION['telefone'] = $_POST['telefone'];
                $_SESSION['endereco'] = $_POST['endereco'];
                $_SESSION['cargo'] = $_POST['cargo'];
                $_SESSION['setor'] = $_POST['setor'];
                $_SESSION['salario'] = $_POST['salario'];
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['senha'] = $_POST['senha'];


                $func1 = new Funcionario($_SESSION['codigo'],$_SESSION['nome'],$_SESSION['cpf'],$_SESSION['telefone'],$_SESSION['endereco'],$_SESSION['cargo'],$_SESSION['setor'],$_SESSION['salario'],$_SESSION['login'],$_SESSION['senha']
            );
                }catch(exeption $erro){
                    echo $erro;
                } // fim do try-catch
            ?>
        </button> <br><br><br>

        <?php
            echo $func1->imprimir();
        ?>
        <br>
        <br>
        
        <a href="Inicial.php"><input class="imprimir1" onclick="funcao1()" value="Cadastrar"/></a> <br>
        
    </form>

   
    
</body>
</html>
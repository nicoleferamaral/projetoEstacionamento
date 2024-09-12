<?php

    namespace projeto\projetoEstacionamento\php;

    require_once("Funcionario.php");
    require_once("Cliente.php");
    require_once("Entrada.php");
    require_once("Saida.php");


    use projeto\projetoEstacionamento\php\Main;
    use projeto\projetoEstacionamento\php\Funcionario;
    use projeto\projetoEstacionamento\php\Cliente;
    use projeto\projetoEstacionamento\php\Entrada;
    use projeto\projetoEstacionamento\php\Saida;

    $func1 = new Funcionario(
        2,
        "Maisa",
        "123456",
        "119999999",
        "Rua sla doq",
        "recepcionista",
        "Comercial",
        3000.00
        );
        $func2 = new Funcionario(
            1,
            "Silvio",
            "123456",
            "119999999",
            "Rua sla doq",
            "Gerente",
            "Comercial",
            6000.00
            );

    $entrada1 = new Entrada(
        519, "Nicole", "119999999","NIC1234", "04/09/2024", "08:00"
    );
    $entrada2 = new Entrada(
        720, "Anderson", "119999999","AND1234", "04/09/2024", "12:00"
    );
    
    $saida1 = new Saida(
        519, "Nicole", "119999999","NIC1234", "04/09/2024", "08:00", "04/09/2024", "9:00"
    );
    $saida2 = new Saida(
        720, "Anderson", "119999999","AND1234", "04/09/2024", "12:00", "04/09/2024", "16:20"
    );

    $cliente1 = new Cliente(
        9,"Theo", "118888888", "4323423", "Rua sei la doq", "Ferrari", "NIC9876","Azul","Dia 12", "320"
    );
    $cliente2 = new Cliente(
        56,"Daemon", "118888888", "53535353", "Rua sei la doq", "Lamborghini", "DAE9876","Vermelho","Dia 12", "320"
    );

   
 


?>
<?php

namespace projeto\projetoEstacionamento\php;

use projeto\projetoEstacionamento\php\Entrada;

class Entrada{
    protected int $codigo;
    protected string $nome;
    protected string $telefone;
    protected string $placa;
    protected string $data;
    protected string $hora;

    
    function __construct(int $codigo,string $nome, string $telefone, string $placa, string $data, string $hora)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->placa = $placa;
        $this->data = $data;
        $this->hora = $hora;
    }//fim do construtor

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
        
        return 
        "<br>Código: ".$this->codigo.
        "<br>Nome: ".$this->nome.
        "<br>Telefone: ".$this->telefone.
        "<br>Placa: ".$this->placa.
        "<br>Data: ".$this->data.  
        "<br>Hora: ".$this->hora;          
    }//fim do imprimir

}//fim da classe



?>
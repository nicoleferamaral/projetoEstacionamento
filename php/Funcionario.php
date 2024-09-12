<?php

    namespace projeto\projetoEstacionamento\php;

    use projeto\projetoEstacionamento\php\Funcionario;

    class Funcionario{
        protected int $codigo;
        protected string $nome;
        protected string $cpf;
        protected string $telefone;
        protected string $endereco;
        protected string $cargo;
        protected string $setor;
        protected float $salario;

    public function __construct(int $codigo, string $nome, string $cpf, string $telefone,  string $endereco, string $cargo, string $setor, float $salario){
        $this->codigo = $codigo;
        $this->nome = $nome;  
        $this->cpf = $cpf;  
        $this->telefone = $telefone; 
        $this->endereco = $endereco; 
        $this->cargo = $cargo;   
        $this->setor = $setor;  
        $this->salario = $salario;  
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
        
        return "<br><br>Código: ".$this->codigo.
                "<br>Nome: ".$this->nome.
                "<br>CPF: ".$this->cpf.
                "<br>Telefone: ".$this->telefone.
                "<br>Endereço: ".$this->endereco.
               "<br>Cargo: ".$this->cargo.
               "<br>Setor: ".$this->setor.
               "<br>Salário: ".$this->salario;

    }//fim do método



}//fim da classe

?>

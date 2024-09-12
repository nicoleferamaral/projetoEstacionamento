<?php
    namespace Projeto\projetoEstacionamento\php;

    Use Projeto\projetoEstacionamento\php\Cliente;

    class Cliente {
        protected int $codigo;
        protected string $nome;
        protected string $telefone;
        protected string $cpf;
        protected string $endereco;
        protected string $marca;
        protected string $placa;
        protected string $cor;
        protected string $data;
        protected string $valor;

        function __construct(int $codigo, string $nome, string $telefone, string $cpf, string $endereco, string $marca, string $placa, string $cor,string $data,string $valor)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
            $this->marca = $marca;
            $this->placa = $placa;
            $this->cor = $cor;
            $this->data = $data;
            $this->valor = $valor;

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
            
            return  "<br>Código: ".$this->codigo.
            "<br>Nome: ".$this->nome.
            "<br>Telefone: ".$this->telefone.
            "<br>CPF: ".$this->cpf.
            "<br>Endereco: ".$this->endereco.  
            "<br>Marca: ".$this->marca.  
            "<br>Placa: ".$this->placa.
            "<br>Cor: ".$this->cor.
            "<br>Data de Pagamento: ".$this->data. 
            "<br>Valor Mensal: ".$this->valor;

        }//fim do imprimir

    }//fim da classe Cliente
?>
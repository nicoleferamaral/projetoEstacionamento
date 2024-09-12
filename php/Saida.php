<?php

    namespace projeto\projetoEstacionamento\php;

    require_once("Entrada.php");

    use projeto\projetoEstacionamento\php\Saida;

    

    class Saida extends Entrada{
        protected string $dataSaida;
        protected string $horaSaida;
    

    
        
        function __construct(string $dataSaida, string $horaSaida)
        {
            $this->dataSaida = $dataSaida;
            $this->horaSaida = $horaSaida;
         
    

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
            
            return parent::imprimir().
                   "<br>Data da Saida: ".$this->dataSaida.
                   "<br>Hora da Saída: ".$this->horaSaida; 
           

                
        }//fim do método

     





    }//fim da classe




  


?>
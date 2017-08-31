<?php

//classe de dados
class calculo
{
    // declaração de membro
    private $valor1;
    private $valor2;
    private $retorno;
    
     public function setRetorno($valor) {
        
        $this->retorno = $valor;
        
    }
    // declaração de método
    public function getRetorno() {
        return $this->retorno;
    }
    
    
    public function setValor1($valor) {
        
        $this->valor1 = $valor;
        
    }
    

  
    // declaração de método
    public function getValor1() {
        return $this->valor1;
    }
    
       public function setValor2($valor) {
        
        $this->valor2 = $valor;
        
    }
    // declaração de método
    public function getValor2() {
        return $this->valor2;
    }
    
    public function somar() {
        
        $this->retorno = $this->valor1 + $this->valor2;
        
    }
}
?>

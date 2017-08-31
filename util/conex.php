<?php

class conex {

    function conectar()
    {
		$servidor = 'localhost';
		$banco    = 'aula10';
		$usuario  = 'root';
		$senha    = '';
		$mysqli     = new mysqli($servidor, $usuario, $senha, $banco);
	
		return $mysqli;
		        
    }
    
    

}
?>



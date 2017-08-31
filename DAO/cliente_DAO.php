<?php include_once '../util/conex.php'; ?>
<?php include_once '../modelo/cliente.php'; ?>

<?php

//Data Access Object
class cliente_DAO {
//https://www.oficinadanet.com.br/post/9990-criando-e-conectando-ao-banco-de-dados-mysql-com-php
    function consultar() {

        $objconex = new conex();
	
        $conexao = $objconex->conectar();

        //processar os dados na camada de modelo
        //ResultSet    
		$query = "select * from clientes;";	
        $consulta = mysqli_query($conexao,$query);

		$stmt = $conexao->prepare($query);
		$stmt->execute();

		$stmt->store_result();
		$stmt->bind_result($column1, $column2, $column3, $column4);
		
		
		$clientes_lista = array();
        while($stmt->fetch()) {
			
             $clientes = new cliente();
            //vamos abastecer os acervos encontrados e coloca-los no array
            $clientes->setId($column1);
            $clientes->setNome($column2);
            $clientes->setTelefone($column3);
            $clientes->setEndereco($column4);
		
			$clientes_lista[] = $clientes->toarray();
        }
			
        return $clientes_lista;
    }
        
	function inserir($objcliente) {

        $objconex = new conex();


        $conex = $objconex->conectar();


         //processar os dados na camada de modelo
        $query = ("INSERT INTO clientes(nome, telefone, endereco) VALUES ('".$objcliente->getNome()."', '".$objcliente->getTelefone()."', '".$objcliente->getEndereco()."');");
		
	   mysqli_query($conex,$query);
        return 1;
        
    }
	
	function alterar($objcliente) {

        $objconex = new conex();


        $conex = $objconex->conectar();


         //processar os dados na camada de modelo
        $query = "update clientes set nome='".$objcliente->getNome()."', telefone='".$objcliente->getTelefone()."', endereco='".$objcliente->getEndereco()."' where id='".$objcliente->getId()."'";
		
	   mysqli_query($conex,$query);
        return 1;
        
    }
	
	function excluir($objcliente) {

        $objconex = new conex();


        $conex = $objconex->conectar();


         //processar os dados na camada de modelo
        $query = ("delete from clientes where id=".$objcliente->getId());
		
	   mysqli_query($conex,$query);
        return 1;
        
    }

}
?>
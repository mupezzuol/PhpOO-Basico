<?php include '../DAO/cliente_DAO.php';?>


<?php

//COntroladora de Dados
//
//
//
//processar os dados na camada DAO



//enviar os dados serializados em JSON para a VIEW
$obj = new cliente_DAO();
if ($_POST["oper"] == "1") {
	    
	echo json_encode($obj->consultar(),true);

} else if ($_POST["oper"] == "2") {
	
	$objcliente = new cliente();
	
	$objcliente->setId($_POST["id"]);
	
	echo json_encode($obj->excluir($objcliente),true);
	
} else if ($_POST["oper"] == "3") {
	//cria o objeto modelo
	$objcliente = new cliente();
	
	$objcliente->setNome($_POST["nome"]);
	$objcliente->setEndereco($_POST["endereco"]);
	$objcliente->setTelefone($_POST["telefone"]);
	$objcliente->setId($_POST["id"]);
	
	echo json_encode($obj->alterar($objcliente),true);  
	
}	else {
	//cria o objeto modelo
	$objcliente = new cliente();
	
	$objcliente->setNome($_POST["nome"]);
	$objcliente->setEndereco($_POST["endereco"]);
	$objcliente->setTelefone($_POST["telefone"]);
	
	echo json_encode($obj->inserir($objcliente),true);  
    
}

?>


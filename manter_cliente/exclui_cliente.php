<?php

	include"conecta_postgres.inc";
	//recupera o id	do cliente
	$id =$_GET["id_cliente"];
	//string sql
	$sql = "DELETE FROM cliente WHERE id='$id'";
	//executa sql
	$result = pg_query($sql);
	//retorna a qtd de linha modificada na tabela
	$linhas = pg_affected_rows($result);
	
	if($linhas == 1){
		//redireciona para lista de cliente
		header("Location: lista_cadastros.php");
	
	}else{
		echo "Operação não realizada";
	}
	//fecha a conexao
	pg_close($conexao);

?>
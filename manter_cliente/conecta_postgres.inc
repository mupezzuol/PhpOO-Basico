<?php
	//string de conexao
	$str_conexao =  "host=localhost port=5432 dbname=dbcliente  user=postgres password=admin";
	//passa a string de conexao para a função pg_connect();
	$conexao = pg_connect($str_conexao );
	
	//testa a conexao
	if($conexao == false){
		echo "Não foi possivel estabelecer conexão com banco de dados";
	}

?>

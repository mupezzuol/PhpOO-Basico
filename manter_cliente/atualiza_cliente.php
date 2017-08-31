<?php
	
	header("Content-type: text/html; charset=utf-8");
	include "conecta_postgres.inc";
	
	//recupera os dados do cliente
	$id = $_POST["id_cliente"];
	$nome = $_POST["txtNome"];
	$cpf = $_POST["txtCPF"];
	$telefone = $_POST["txtTelefone"];
	$endereco = $_POST["txtEndereco"];
	//string sql
	$sql = "UPDATE cliente SET cpf='$cpf', nome='$nome',telefone='$telefone', endereco='$endereco' WHERE id='$id'";
	//executa sql
	$result = pg_query($sql);
	//retorna a qtd de linhas modificadas na tabela
	$linhas = pg_affected_rows($result);
	
	if($linhas==1){
		echo "Cliente atulizado com sucesso!"."<br/>";
		echo "<a href='lista_cadastros.php'>Voltar</a>";
	}else{
		echo "Operação não realizada.";
	}
	//fecha conexao
	pg_close($conexao);
	
?>
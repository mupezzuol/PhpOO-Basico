
<?php
	//inclue o arquivo de conexao
	include "conecta_postgres.inc";

	//recupera os dados do post
	$nome=$_POST["txtNome"];
	$cpf =$_POST["txtCPF"];
	$telefone=$_POST["txtTelefone"];
	$endereco = $_POST["txtEndereco"];
	
	//string sql
	$sql="INSERT INTO cliente ( cpf, nome, telefone, endereco) 
			VALUES  ('$cpf', '$nome', '$telefone', '$endereco')";
	//executa sql
	 pg_query($sql);
	 //fecha conexao
	 pg_close($conexao);
	
	//Substituido pelo redirecionamento
	//echo "Cliente cadastrado com sucesso!";
	header("Location: lista_cadastros.php");
	
?>

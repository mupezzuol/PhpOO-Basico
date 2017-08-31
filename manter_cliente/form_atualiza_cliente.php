<?php
	include "conecta_postgres.inc";
	//recupera o id_cliente
	$id_cliente = $_GET["id_cliente"];
	//consulta os dados do cliente pelo id
	$consulta_por_id = "SELECT * FROM cliente WHERE id = $id_cliente";
	//executa consulta_por_id
	$result = pg_query($consulta_por_id);
	//retorna um array com os dados do cliente
	$cliente = pg_fetch_assoc($result);
	//fecha conexao
	pg_close($conexao);
?>
<DOCTYPE html>
<html>
<head>
	<title>Cadastro de Cliente</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Atualização de Cliente</h1>
	<form action="atualiza_cliente.php" method="post">
		<input type="hidden" name="id_cliente" value="<?php print($cliente['id'])?>" >
		Nome:<input type="text" name="txtNome" value="<?php print($cliente['nome'])?>"><br/>
		CPF:<input type="text" name="txtCPF" value="<?php print($cliente['cpf'])?>"><br/>
		Tefone:<input type="text" name="txtTelefone" value="<?php print($cliente['telefone'])?>"><br/>
		Endereco: <input type="text" name="txtEndereco" value="<?php print($cliente['endereco'])?>"><br/>
		<input type="submit" value="Atualizar">
	</form>
</body>
</html>
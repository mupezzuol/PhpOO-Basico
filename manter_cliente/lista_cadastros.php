
<?php
		include "conecta_postgres.inc";
		//consulta todos os cadastros
		$result = pg_query("SELECT * FROM cliente");
?>
<DOCTYPE html>
<html>
<head>
	<title>Gestão Cliente</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Clientes Cadastrados</h1>
	<table border=1>
		<tr>
			<td>Atualizar</td>
			<td>Excluir</td>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Endereco</td>
		</tr>
	<?php
			//converte cada registro em um array e exibe na tabela
			while($cliente = pg_fetch_assoc($result)){
				echo "<tr>";
					//passa como parametro via $_GET o id de cada cliente
					echo "<td><a href='form_atualiza_cliente.php?id_cliente=$cliente[id]'> atualizar </a></td>";
					echo "<td><a href='exclui_cliente.php?id_cliente=$cliente[id]'> excluir</a></td>";
					//exibe os dados do cliente 
					echo "<td>".$cliente['nome']."</td>";
					echo "<td>".$cliente['telefone']."</td>";
					echo "<td>".$cliente['endereco']."</td>";
				echo "</tr>";
			}
		//fecha conexao	
		pg_close($conexao);
	?>
	</table>
	<p>Cadastrar <a href="form_cadastra_cliente.html">novo </a>cliente </p>
</body>
</html>
<?php 
require_once("_script/ProdutoDAO.php");
?>

<!DOCTYPE html>
<html lan="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Sistema de Gerenciamento | Estoque</title>
</head>


<body>
<div id="interface">

	<h1>Produtos Disponíveis</h1>

	<!-- Tabela que lista produtos cadastrados no sistema -->
	<table>
		<tr>
			<th>Id_Produto</th>
			<th>Produto</th>
			<th>Quantidade</th>
			<th>Custo</th>
			<th>Preço</th>
			<th>Tipo</th>
			<th>Id_Categoria</th>
			<th>Ação</th>
		</tr>
		<!-- Busca todos produtos cadastrados no banco-->
		<?php  
                        $produto = new ProdutoDAO();
			$lista = $produto->listar();
		?>
			<tr>
				<td><?php echo $produto->idproduto; ?></td>
				<td><?php echo $produto->nome; ?></td>
				<td><?php echo $produto->quantidade; ?></td>
				<td><?php echo $produto->custo; ?></td>
				<td><?php echo $produto->preco; ?></td>
				<td><?php echo $produto->descricao; ?></td>
				<td><?php echo $produto->idcategoria; ?></td>
				<!-- Imprime links (opções) na última coluna para editar ou excluir usuário -->
				<td>
					<a href="produto_editar.php?idproduto=<?php echo $produto->idproduto; ?>">Editar</a>
					&nbsp;&nbsp;
					<a href="produto_excluir.php?idproduto=<?php echo $produto->idproduto; ?>">Excluir</a>
				</td>
			</tr>
		
	</table>

	<br/><br/><br/><a href="console.php">Voltar</a>

</div>
</body>

</html>
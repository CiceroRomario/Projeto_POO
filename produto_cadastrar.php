<?php
require_once("_script/ProdutoDAO.php");

	if( isset($_GET["action"]) && ($_GET["action"] == "Cadastrar") ){
		$produto = new Produto();
                
                $produto->idproduto = $_POST["nId"];
                $produto->nome = $_POST["nNome"];
		$produto->quantidade = $_POST["nQuant"];
                $produto->custo = $_POST["nCusto"];
                $produto->preco = $_POST["nPreco"];
                $produto->descricao = $_POST["nDesc"];
                $produto->idcategoria = $_POST["nCategoria"];
		
                
                $produtoDao = new ProdutoDAO();
		$produtoDao->inserir($produto);
                
		$inserirSucesso = true;
	}
?>
       
	<?php
		if( $inserirSucesso ) { ?>

			<div class="alert alert-success" role="alert">
			  	<p><span class="glyphicon glyphicon-exclamation-sign"></span> Produto cadastrado com sucesso!</p>
			</div>

		<?php } 
	?>


	<!-- Aqui começa o formulário de cadastro -->
	<form action="?page=produto_cadastrar & action=Cadastrar" method="post" role="form">

		<div class="form-group">
			<label for="idproduto" class="control-label">Id:</label>
			<input type="text" class="form-control" id="idProduto" name="nId" required />
		</div>

		<div class="form-group">
			<label for="nome" class="control-label">Nome:</label>
			<input type="text" class="form-control" id="idNome" name="nNome" required />
		</div>

		<div class="form-group">
			<label for="quantidade" class="control-label">Quantidade:</label>
			<input type="text" class="form-control" id="idQuantidade" name="nQuant" required />
		</div>
            
                <div class="form-group">
			<label for="custo" class="control-label">Custo:</label>
			<input type="text" class="form-control" id="idCusto" name="nCusto" required />
		</div>
            
                <div class="form-group">
			<label for="preco" class="control-label">Preço:</label>
			<input type="text" class="form-control" id="idPreco" name="nPreco" required />
		</div>
            
                <div class="form-group">
			<label for="descricao" class="control-label">Descrição:</label>
			<input type="text" class="form-control" id="idDescricao" name="nDesc" required />
		</div>
            
                <div class="form-group">
			<label for="idcategoria" class="control-label">Categoria:</label>
			<input type="text" class="form-control" id="idCategoria" name="nCategoria" required />
		</div>

		<div class="row">
			<div class="col-xs-6">
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block"/>Salvar</button>
				</div>
			</div>
			
				<div class="form-group">
					<button type="reset" class="btn btn-default btn-block"/>Limpar</button>
				</div>
			
		</div>

	</form>


    
    
</body>

    </html>

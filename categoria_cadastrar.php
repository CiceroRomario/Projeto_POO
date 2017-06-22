<?php
require_once("_script/CategoriaDAO.php");

	if( isset($_GET["action"]) && ($_GET["action"] == "Cadastrar") ){
		$categoria = new Categoria();
                
                $categoria->idcategoria = $_POST["nId"];
                $categoria->categoria = $_POST["nNome"];
		$categoria->idpai = strtolower($_POST["nPai"]);
                
                $categoriaDao = new CategoriaDAO();
		$categoriaDao->inserir($categoria);
                
		$inserirSucesso = true;
	}
?>
        
	<?php
		if( $inserirSucesso ) { ?>

			<div class="alert alert-success" role="alert">
			  	<p><span class="glyphicon glyphicon-exclamation-sign"></span> Categoria cadastrada com sucesso!</p>
			</div>

		<?php } 
	?>


	<!-- Aqui começa o formulário de cadastro -->
	<form action="?page=categoria_cadastrar & action=Cadastrar" method="post" role="form">

		<div class="form-group">
			<label for="idcategoria" class="control-label">Id:</label>
			<input type="text" class="form-control" id="idCategoria" name="nId" required />
		</div>

		<div class="form-group">
			<label for="categoria" class="control-label">Nome:</label>
			<input type="text" class="form-control" id="idNome" name="nNome" required />
		</div>

		<div class="form-group">
			<label for="idpai" class="control-label">Sub Categoria:</label>
			<input type="text" class="form-control" id="idPai" name="nPai" required />
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
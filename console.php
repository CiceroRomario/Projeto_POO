<!DOCTYPE html>
<html lan="pt-br">
<head>
	<title>Sistema de Gerenciamento</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8"/>
	<meta name="generator" content="Jair Junior" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="_style/css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="_style/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>




<body>
<!-- **************************************************************************************************** -->
<!-- ***************************************** MENU SUPERIOR FIXO *************************************** -->
<!-- **************************************************************************************************** -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="console.php">Sistema de Gerenciamento</a>
        </div>

       
    	<!-- /navbar --> 
    </div>
    <!-- /container-fluid -->
</div>
<!-- /Header -->



<!-- **************************************************************************************************** -->
<!-- ***************************************** PARTE PRINCIPAL ****************************************** -->
<!-- **************************************************************************************************** -->
<div class="container-fluid">
    <div class="row">
        <!-- ************************************************************************ -->
        <!-- ********************** MENU LATERAL ESQUERDO *************************** -->
        <!-- ************************************************************************ -->
        <div class="col-sm-3" id="sideBar">
            

            <!-- *********************************************** -->
            <!-- ****** INÍCIO DOS MENUS DE CONFIGURAÇÕES ****** -->
            <!-- *********************************************** -->
            <span id="menu-title"><i class="glyphicon glyphicon-wrench"></i> Configurações</span>
            <hr>

            <ul class="nav nav-stacked">


                <!-- Menu Produtos -->
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#menuProdutos">
                    <span class="glyphicon glyphicon-barcode"></span> 
                    <strong>Produtos</strong> 
                        <ul class="nav nav-stacked collapse <?php if(isset($menuAberto)){echo $menuAberto; $menuAberto = '';}?>" id="menuProdutos">
                            <li><a href="produto_cadastrar.php"><i class="glyphicon glyphicon-cog"></i> Cadastrar Produtos</a></li>
                            <li><a href="produto_listagem.php"><i class="glyphicon glyphicon-search"></i> Consultar Produtos</a></li>
                        </ul>
                </li>


                <!-- Menu Clientes -->
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#menuCategoria">
                    <span class="glyphicon glyphicon-user"></span> 
                    <strong>Categoria</strong> 
                    <i class="glyphicon glyphicon-chevron-down"></i></a>
                        
                        <ul class="nav nav-stacked collapse" id="menuCategoria">
                            <li><a href="categoria_cadastrar.php"><i class="glyphicon glyphicon-cog"></i> Cadastrar Categorias</a></li>
                            <li><a href="categoria_listagem.php"><i class="glyphicon glyphicon-search"></i> Consultar Categorias</a></li>
                        </ul>
                </li>
              
            </ul>
            <!-- FIM DOS MENUS DE CONFIGURAÇÕES -->

        </div>
        <!-- FIM DO MENU LATERAL ESQUERDO -->


        


    </div>
    <!-- /row -->
</div>
<!-- /container-fluid -->




<script type="text/javascript" src="_style/js/bootstrap.min.js"></script>
<script type="text/javascript" src="_style/js/scripts.js"></script>
</body>
</html>

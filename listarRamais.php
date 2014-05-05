<?php 
require_once '../intranet/config/config.php';

?>
<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>INTRANET CEADIS</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='shortcut icon' href='img/ceadisico.ico'>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
	
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-principal">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	</div>
	
		<div class="container-fluid collapse navbar-collapse" id="menu-principal">
			<h4 class="navbar-text"><a href="index.php">CEADIS - Centro Estadual de Armazenamento e Distribuição de insumos de Saúde</a></h4>
			<h5 class="navbar-right navbar-text"><?php echo(date('d-m-Y H:i:s'));?></h5><span class="navbar-right navbar-text"></span>
		</div>
	</nav>

	
	<nav class="navbar"></nav>

	<div class="container-fluid ">
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">LINK DE ACESSO</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
					<?php 
						include_once 'links.php';
					?>					
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">INFORMAÇÕES</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
						<li><a href="listarRamais.php">Lista de Ramais</a></li>
					</ul>
				</div>
			<div class="panel-footer"></div>
		</div>

	</div>
	<div class="container col-sm-9">
	
		<div class="jumbotron ">

			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de Ramais</h3>
					</div>
				<div class="panel-body">
			<?php
			$tbUsuario = new TbUsuario();
			
			$table = new Table();
			
			$table->setCabecalho(array('Nome','Ramal','Departamento'));
			
			$table->setDados($tbUsuario->listarRamaisIntranet());
			
			$table->mostrarDataGrid();
			?>
				</div>
			</div>
		</div>
		
	</div>


	</div>
	
	<footer>
		<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			<p class="navbar-text">..:: © CEADIS [Tecnologia da Informação] <?php echo date('Y'); ?> ::..</p>
		</nav>
		<nav class="navbar"></nav>
	</footer>

	<script src=js/jquery.js></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.dataTables.js"></script>	
	<script src="js/my-data-table.js"></script>		

</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>INTRANET CEADIS</title>
<link rel="stylesheet" href="css/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<h4 class="navbar-text"><a href="index.php">CEADIS - Centro Estadual de Armazenamento e Distribuição de insumos de Saúde</a></h4>
			<h5 class="navbar-right navbar-text"><?php echo(date('d-m-Y H:i:s'));?></h5>
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
			<h1>
				<b>CEADIS</b>
			</h1>
			<p>Ao lado você encontra os links de acesso aos principais sistemas
				do CEADIS.</p>
			<img src="img/fotoinicial.png" class="img-responsive img-rounded"
				alt="Logotipo Ceadis">

		</div>
	</div>


	</div>
	<footer>
		<nav class="navbar navbar-default navbar-fixed-bottom"
			role="navigation">
			<p class="navbar-text">© CEADIS - <?php echo date('Y'); ?>
		</nav>
		<nav class="navbar"></nav>
	</footer>

</body>
</html>
<?php
//Angel Tarensi
require_once 'controlador/controlador.php';
require_once 'model/model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="estils/estils.css"> <!-- feu referència al vostre fitxer d'estils -->
	<title>Paginació</title>
</head>
<body>
	<div class="contenidor">
		<form method="get">

			<h1>Articles</h1>
			<p>Numero de pàgines:</p>
			<select name="nArticles" onchange="this.form.submit()">
				<option value="5"<?php if(isset($_GET["nArticles"]) && $_GET["nArticles"] == 5) echo 'selected'; ?>>5</option>
				<option value="10"<?php if(isset($_GET["nArticles"]) && $_GET["nArticles"] == 10) echo 'selected'; ?>>10</option>
				<option value="15"<?php if(isset($_GET["nArticles"]) && $_GET["nArticles"] == 15) echo 'selected'; ?>>15</option>
				<option value="30"<?php if(isset($_GET["nArticles"]) && $_GET["nArticles"] == 30) echo 'selected'; ?>>30</option>
				<option value="50"<?php if(isset($_GET["nArticles"]) && $_GET["nArticles"] == 50) echo 'selected'; ?>>50</option>
				<option value="100"<?php if(isset($_GET["nArticles"]) && $_GET["nArticles"] == 100) echo 'selected'; ?>>100</option>
        	</select>
			<section class="articles">
				<ul>
					<!--Mostrar els articles-->
					<?php consultaArticles(); ?>
				</ul>
			</section>

			<section class="paginacio">
				<!--Mostrar els botons de la paginació-->
				<?php mostrarPagines(); ?>
			</section>
		</form>
	</div>
</body>
</html>
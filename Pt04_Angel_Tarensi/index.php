<?php
//Angel Tarensi
require_once 'controlador/controlador.php';
require_once 'model/model.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <!--Boostrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!--CSS-->
        <link rel="stylesheet" href="estils/estils.css" type="text/css">
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
			<button type="button" value="log-in" onclick="window.location.href='login.view.php'" class="botonesAD">Log-in</button>
			<button type="button" value="register" onclick="window.location.href='register.view.php'">Register</button>
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
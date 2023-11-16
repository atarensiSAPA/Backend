<?php
//Angel Tarensi
require_once 'controlador/controladorAdmin.php';
require_once 'model/modelAdmin.php';
require_once 'controlador/tancarSessio.php';
require_once 'controlador/GOOGLE-LOGIN-PHP/login.php';
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
			<section class="paginacio">
				<!--Mostrar els botons de la paginació-->
				<?php totalArticlesUsuari(); ?>
			</section>
		</form>
		<form method="post" class="botonesAD">
			<button type="button" name="profile" onclick="window.location.href='./perfilUsuari.php'" class="botonTS">Perfil</button>
			<button type="submit" name="close" onclick="<?php tancarSessio(); ?>" class="botonTS">Tancar sessió</button>
		</form>
		<form method="post">
			<section class="articles">
					<ul>
						<!--Mostrar els articles de l'usuari indicat-->
						<?php mostrarArticlesUsuari(); ?>
					</ul>
			</section>
		</form>
		<form method="post">
			<br><label>Donar-li click per inserir un article -></label>
			<button type="submit" name="afegir" id="afegir">
				<img src="imatges/afegir.png" alt="afegir" width="35px" height="35px" onclick="<?php if(isset($_POST['afegir'])){header('Location: ./Aarticles.view.php');} ?>">
			</button>
		</form>
	</div>
</body>
</html>
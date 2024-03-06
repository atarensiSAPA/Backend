<?php require_once("model/modelAdmin.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegir article</title>
</head>
<body>
    <h1>Afegir Article</h1>
    <form method="post">
        <label for="articleUser">Article:</label>
        <input type="text" name="articleUser" id="articleUser" placeholder="Nom article" required>
        <button type="submit" name="afegir" id="afegir" onclick="<?php afegirArticleUser(); ?>">Afegir article</button>
    </form>
    <button type="button" name="tornar" id="tornar" onclick="window.location.href='index.admin.php'">Tornar</button>
</body>
</html>
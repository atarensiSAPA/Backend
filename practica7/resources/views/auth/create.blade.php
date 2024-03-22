<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear article</title>
</head>
<body>
    <h1>Afegir article</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label for="article">Nom artículo</label>
        <input type="text" name="article">
        <button type="submit">Afegir</button>
    </form>
</body>
</html>
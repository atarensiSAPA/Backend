<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Article</title>
</head>
<body>
    <h1>Modificar article</h1>
    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="article">Nom article</label>
        <input type="text" name="article" value="{{ $article->article }}">
        <button type="submit">Modificar</button>
    </form>
</body>
</html>
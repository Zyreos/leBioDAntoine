<!DOCTYPE html>
<html>
<head>
    <title>Article {{ $article->id }}</title>
</head>
<body>

    <h1>Articles {{ $article->id }}</h1>

    <ul>
        <li>Name: {{ $article->name }}</li>
        <li>Price: {{ $article->price }}</li>
        <li>Description: {{ $article->description }}</li>
        <li>Stock: {{ $article->stock }}</li>
    </ul>

    <div>
        <form method="POST" action="{{ route('articles.destroy', $article->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="show" value="Supprimer" />
        </form>
        <a class="show" href="{{ route('articles.edit', $article->id) }}"> Editer </a>
    </div>

    <a href="{{ route('articles.index') }}">Retour à l'index des articles</a>

</body>
</html>

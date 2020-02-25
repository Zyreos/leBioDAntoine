<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
<h1>Liste des Articles</h1>
{{ $articles->links() }}
<a href="{{ route('articles.create') }}">Création d'un article</a>
@foreach ($articles as $article)
    <h2><a href="{{ route('articles.show', $article->id) }}">Article {{ $article->id }}</a> </h2>
    <ul>
        <li>Name: {{ $article->name }}</li>
        <li>Price: {{ $article->price }}</li>
        <li>Description: {{ $article->description }}</li>
        <li>Stock: {{ $article->stock }}</li>
    </ul>
@endforeach
{{ $articles->links() }}
</body>
</html>

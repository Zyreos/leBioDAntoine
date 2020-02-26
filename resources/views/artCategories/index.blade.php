<!DOCTYPE html>
<html>
<head>
    <title>Catégories d'articles</title>
</head>
<body>
<h1>Liste des Catégories d'articles</h1>
{{ $articles->links() }}
<a href="{{ route('articlecategories.create') }}">Création d'une catégorie</a>
@foreach ($artCategories as $artCategory)
    <h2><a href="{{ route('articles.show', $article->id) }}">Categorie {{ $artCategory->id }}</a> </h2>
    <ul>
        <li>Name: {{ $artCategory->name }}</li>
    </ul>
@endforeach
{{ $articles->links() }}
</body>
</html>

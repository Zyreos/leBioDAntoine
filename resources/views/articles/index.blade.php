<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
@foreach ($articles as $article)
    <h1>Car {{ $article->id }}</h1>
    <ul>
        <li>Name: {{ $article->name }}</li>
        <li>Price: {{ $article->price }}</li>
        <li>Description: {{ $article->description }}</li>
        <li>Stock: {{ $article->stock }}</li>
    </ul>
@endforeach
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Articles</title>
</head>
<body>
@foreach ($articles as $article)
    <h1>Car {{ $article->id }}</h1>
    <ul>
        <li>Make: {{ $article->make }}</li>
        <li>Price: {{ $article->price }}</li>
        <li>Description: {{ $article->desfription }}</li>
        <li>Stock: {{ $article->stock }}</li>
    </ul>
@endforeach
</body>
</html>

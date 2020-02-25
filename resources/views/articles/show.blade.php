<!DOCTYPE html>
<html>
<head>
    <title>Articles {{ $article->id }}</title>
</head>
<body>
<h1>Articles {{ $article->id }}</h1>
<ul>
    <li>Make: {{ $article->make }}</li>
    <li>Model: {{ $article->model }}</li>
    <li>Produced on: {{ $article->produced_on }}</li>
</ul>
</body>
</html>

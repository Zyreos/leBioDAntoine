<!DOCTYPE html>
<html>
<head>
    <title>Création d'un article</title>
</head>

<body>
<h1>Création d'article</h1>


<form class="create" action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ method_field('POST') }}

    <div>
        {!! $errors->first('name', '<small>:message</small>') !!}<br />
        <label class="label"> Nom :
            <input type="text" name="name">
        </label>
    </div>

    <div>
        {!! $errors->first('price', '<small>:message</small>') !!}<br />
        <label class="label"> Price :
            <input type="text" name="price">
        </label>
    </div>

    <div>
        {!! $errors->first('description', '<small>:message</small>') !!}<br />
        <label class="label"> Description :
            <textarea name="description" rows="10" cols="30"></textarea>
        </label>
    </div>

    <div>
        {!! $errors->first('description', '<small>:message</small>') !!}<br />
        <label class="label"> Stock :
            <input type="text" name="stock">
        </label>
    </div>

    <div class="choice">
        <button type="submit"> Enregistrer </button>
        <a href="{{ route('articles.index') }}">Retour à l'index des articles</a>
    </div>

</form>
</body>
</html>

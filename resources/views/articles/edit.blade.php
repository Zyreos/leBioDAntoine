<!DOCTYPE html>
<html>
    <head>
        <title>Article {{ $article->id }}</title>
    </head>

    <body>
    <h1 class="t1">Edition d'article</h1>


    <form class="create" action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}

        <div>
            {!! $errors->first('name', '<small>:message</small>') !!}<br />
            <label class="label"> Nom :
                <input type="text" name="name" value="{{ $article-> name }}">
            </label>
        </div>

        <div>
            {!! $errors->first('price', '<small>:message</small>') !!}<br />
            <label class="label"> Price :
                <input type="text" name="price" value="{{ $article->price }}">
            </label>
        </div>

        <div>
            {!! $errors->first('description', '<small>:message</small>') !!}<br />
            <label class="label"> Description :
                <textarea name="description" rows="10" cols="30">{{ $article-> description }}</textarea>
            </label>
        </div>

        <div>
            {!! $errors->first('description', '<small>:message</small>') !!}<br />
            <label class="label"> Stock :
                <input type="text" name="stock" value="{{ $article->stock }}">
            </label>
        </div>

        <div class="choice">
            <button type="submit"> Enregistrer </button>
            <a href="{{ route('articles.index') }}">Retour à l'index des articles</a>
        </div>

    </form>
    </body>
</html>

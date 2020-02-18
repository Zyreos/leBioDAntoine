<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function likes() {
        return $this->belongsToMany('App\User', 'likes');
    }

    public function orders() {
        return $this->belongsToMany('App\Order', 'contain');
    }

    public function contents() {
        return $this->belongsToMany('App\Content', 'articles_contents');
    }

    public function categories() {
        return $this->belongsToMany('App\Category', 'belongs');
    }
}

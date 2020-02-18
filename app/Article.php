<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function likes() {
        return $this->belongsToMany('app\User', 'likes');
    }

    public function orders() {
        return $this->belongsToMany('app\Order', 'contain');
    }

    public function contents() {
        return $this->belongsToMany('app\Content', 'articles_contents');
    }

    public function categories() {
        return $this->belongsToMany('app\Category', 'belongs');
    }
}

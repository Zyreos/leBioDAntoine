<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtCategory extends Model
{
    public function categories() {
        return $this->belongsToMany('App\Article', 'belongs');
    }
}

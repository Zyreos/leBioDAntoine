<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function orders() {
        return $this->belongsToMany('App\Order', 'group_order');
    }

    public function articles() {
        return $this->belongsToMany('App\Article','article_group');
    }

}

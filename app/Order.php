<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function articles() {
        return $this->belongsToMany('App\Article', 'contain');
    }

    public function group() {
        return $this->belongsToMany('App\Group', 'group_order');
    }

    public function users() {
        return $this->belongsToMany('App\User', 'user_order');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function articles() {
        return $this->belongsToMany('app\Article', 'contain');
    }
}

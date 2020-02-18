<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function users() {
        return $this->belongsToMany('App\User', 'addresses');
    }
}

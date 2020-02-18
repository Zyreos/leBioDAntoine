<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function contentType() {
        return $this->hasMany('App\ContentType');
    }
}

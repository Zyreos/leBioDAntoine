<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentType extends Model
{
    public function contents() {
        return $this->belongsTo('App\Content');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function note()
    {
        return $this->hasMany('App\Note');
    }
}

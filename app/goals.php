<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goals extends Model
{
    //
    public function course()
    {
        return $this->hasMany(course::class,'id');
    }
}

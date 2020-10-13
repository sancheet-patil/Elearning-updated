<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    public function goals()
    {
        return $this->belongsTo(goals::class,'id');
    }

    public function subcourse()
    {
        return $this->hasMany(subcourse::class,'id');   
    }

    public function livestream()
    {
        return $this->hasMany(livestream::class,'id');
    }
}

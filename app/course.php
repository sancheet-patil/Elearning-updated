<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    public function goals()
    {
        return $this->belongsTo(goals::class, 'goal_id');
    }

    public function subcourse()
    {
        return $this->hasMany(subcourse::class, 'id');
    }

    public function livestream()
    {
        return $this->hasMany(livestream::class, 'id');
    }

    public function homeVideo()
    {
        return $this->hasMany(homeVideo::class, 'id');
    }

    public function free_video()
    {
        return $this->hasMany(free_video::class, 'id');
    }
}

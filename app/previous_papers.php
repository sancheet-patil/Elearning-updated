<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class previous_papers extends Model
{
	 protected $table='previous_papers';
    protected  $fillable=['Subject','Question','Option1','Option2','Option3','Option4','Answer'];

    //
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
            public $timestamps = false;

    public function users(){
    	return $this->belongsTo('App\Models\User','user_id','id');
    }
}

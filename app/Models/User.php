<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
		protected $table = "users";
		protected $primaryKey = "id";
        public $timestamps = false;

    public function posts(){
    	return $this->hasMany('App\Models\Post','user_id','id');
    }

}

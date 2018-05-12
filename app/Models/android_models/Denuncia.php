<?php

namespace App\Models\android_models;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $table="denuncia";
    
    protected $primaryKey = 'iddenuncia';

    public $timestamps = false;


    public function ciudadano(){
    	return $this->belongsTo('android_models\Ciudadano','idciudadano','ciudadano_idciudadano');
    }
}

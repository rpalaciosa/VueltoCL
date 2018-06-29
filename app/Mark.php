<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    //
	public function campagin()
    {
        return $this->hasMany('App\Campagin');
    }
	
	public function category()
    {
        return $this->belongsTo('App\Category','id_categoria','id');
    }
}

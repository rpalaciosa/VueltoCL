<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campagin extends Model
{
    //
	
	public function mark()
    {
        return $this->belongsTo('App\Mark','mark_id','id_marca');
    }
}

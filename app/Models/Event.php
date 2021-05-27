<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use DB;

class Event extends Model
{
	public function workshops($is_year = 0){
		if(!empty($is_year)){
			return $this->getFutureEvent()->where(DB::raw('YEAR(start)'), '>=', date('Y') );
		}else{
			return $this->hasMany('App\Models\Workshop','event_id','id');
		}    	
    }    

    public function getFutureEvent(){
    	return $this->hasMany('App\Models\Workshop','event_id','id');
    }
}

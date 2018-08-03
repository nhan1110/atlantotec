<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
	protected $table = 'atlantotec_availability';
    public function users() {
        return $this->hasMany('App\Models\Users', 'availability_id');
    }
 
}

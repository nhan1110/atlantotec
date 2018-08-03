<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
	protected $table = 'atlantotec_roles';
    public function users() {
        return $this->hasMany('App\Models\Users', 'role_id');
    }
 
}

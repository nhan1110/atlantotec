<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
	protected $table = 'atlantotec_group_user';
    public function users() {
        return $this->hasMany('App\Models\Users', 'group_id');
    }
 
}

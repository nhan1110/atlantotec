<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	protected $table = 'atlantotec_languages';
    public function users() {
        return $this->hasMany('App\Models\Users', 'language_id');
    }
 
}

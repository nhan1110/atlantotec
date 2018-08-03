<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Modules extends Model
{
    protected $table = 'atlantotec_modules';
    protected function getModelByUserDefault(){
        return $this
        ->select("atlantotec_modules.*")
        ->orderBy("atlantotec_modules.sort")
        ->get();
    }
}

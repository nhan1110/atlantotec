<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    protected $table = 'atlantotec_rules';
    protected $fillable = [
        'module_id','role_id','add', 'update', 'view','delete'
    ];
    protected $primaryKey = (['module_id', 'role_id']);
    public $incrementing = false;
    protected function GetModulesAllow ($RoleID,$is_sys = 1){
        return $this
        ->rightJoin("atlantotec_modules",function($q) use ($RoleID)
        {
            $q->on('atlantotec_modules.id', '=', 'atlantotec_rules.module_id')
            ->on('atlantotec_rules.role_id', '=', DB::raw($RoleID))
            ->orderBy("atlantotec_modules.sort");
        })
        ->where("atlantotec_modules.status","=","1")
        ->where("atlantotec_modules.is_sys","=",$is_sys)
        ->select("atlantotec_modules.*","atlantotec_rules.view","atlantotec_rules.add","atlantotec_rules.update","atlantotec_rules.delete")
        ->groupBy("atlantotec_modules.id")
        ->get();
    }
    protected function getModelByUser($RoleID){
        return $this
        ->join ("atlantotec_modules","atlantotec_modules.id","=","atlantotec_sys_rules.module_id")
        ->join("sys_model_descriptions","sys_model_descriptions.sys_model_id","=","atlantotec_modules.id")
        ->join ("sys_roles","sys_roles.id","atlantotec_sys_rules.role_id") 
        ->where("atlantotec_sys_rules.role_id","=",$RoleID)
        ->where("atlantotec_sys_rules.isview","=","1")
        ->where("sys_model_descriptions.language_id","=",$LangID)
        ->select("atlantotec_modules.*","sys_model_descriptions.name")
        ->orderBy("atlantotec_modules.sort_order")
        ->groupBy("atlantotec_modules.id")
        ->get();
    }
    protected function _validateRULE($role,$path,$action){
        return $this->join("atlantotec_modules","atlantotec_modules.id","=","atlantotec_rules.module_id")
        ->select("atlantotec_modules.*")
        ->where([
            ["atlantotec_rules.role_id","=",$role],
            ["atlantotec_rules.".$action,"=",1],
            ["atlantotec_modules.controller","=",$path]
        ])->first();
    }
}

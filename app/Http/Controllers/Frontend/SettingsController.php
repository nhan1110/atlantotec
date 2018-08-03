<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Core\FrontendController;
use Illuminate\Http\Request;
class SettingsController extends FrontendController
{
    function __construct() {
        parent::__construct();
        $this->_VIEW = "settings/";
        $this->_TABLE = "atlantotec_setting_workings";
    }
	public function index(){
        $this->_DATA["bodyClass"] = "home";
        $this->_DATA["SettingWorkings"] = \App\Models\SettingWorkings::where([["user_id","=", $this->_USER->id]])->get();
    	$this->_DATA["mainClass"] = "dashboard-page arbeitszeiten";
        return view($this->_FIXVIEW . $this->_VIEW .'index',$this->_DATA);
    }
    public function store(Request $request){
        
        $this->_MODEL = null;
        if($request->id == null || $request->id == 0 ){
            $this->_MODEL = new \App\Models\SettingWorkings();
            $this->_MODEL->user_id = $this->_USER->id;
        }else
        {
            $this->_MODEL = \App\Models\SettingWorkings::where([
                ["id","=", $request->id],
                ["user_id","=", $this->_USER->id]
            ])->first();
        }
        if($this->_MODEL){
            $posts = $request->all();
            $columns = $this->_GetTableColumns($this->_TABLE);
            foreach ($posts as $key => $value) {
                if($key != "id" && $key != "user_id"){
                    if(in_array($key,$columns)){
                        if(is_array( $value)){
                            $value = json_encode($value);
                        }
                        $this->_MODEL->{$key} = $value; 
                    }
                   
                }
            }
            $this->_MODEL->save(); 
        }
        return json_encode($this->_MODEL);
    }

    public function destroy (Request $request){
        if($request->id){
            $this->_MODEL = \App\Models\SettingWorkings::find($request->id);
            if($this->_MODEL->user_id == $this->_USER->id) $this->_MODEL->delete();
            return json_encode($this->_MODEL);
        }
    }
}

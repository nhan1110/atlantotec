<?php 
namespace App\Http\Controllers\Core;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
class FrontendController extends Controller
{
    public $_USER       = null;
    public $_FIXVIEW    = "frontend/";
    public $_VIEW       = "";
    public $_URL        = "/";
    public $_DATA       = [];
    public $_MODULE     = null;
    public $_MODEL      = null;
    public $_PAGINGNUMBER = 30;
    public $_MENU_ACTIVER = "day-view";
    public $_TABLE         = "";
    public $_ROLNAME    = [
        "add"      => ["add","create","save","update","store"],
        "delete"   => ["delete","remove","destroy"],
        "view"     => ["show","view","review","index",""],
        "update"   => ["edit","update"]
    ];
    public $_COMMONROUTE = [];
    public function __construct()
    {   
        $this->_DATA["_SEFF"]      = $this;
        $this->_DATA["_PAGETILE"]  = "Atlantotec";
        $this->_COMMONROUTE = [
            "dashboard",
            "logout",
            "notallow",
            "notallowajax"
        ];
        $this->middleware(function ($request, $next) {
            $this->_USER = session('user_info');
            $this->_DATA["_BACKURL"]   = $this->lookget_BACKURL();
            if(\Request::isMethod('get')){
                $this->add_BACKURL();  
            } 
            return $next($request);
        });
    }
    public function _GetTableColumns($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);
    }
    private function add_BACKURL (){
        $fullUrl = \Request::fullUrl();
        $backcurrent_url = session('_BACKURL');
        if($backcurrent_url !=null && count($backcurrent_url) > 20){
            unset ($backcurrent_url[0]);
        }
        if($backcurrent_url != null){
            foreach ($backcurrent_url as $key => $value) {
                if($value != $fullUrl){
                    $arg_url[] = $value;
                }
            }
        }
        $arg_url [] = $fullUrl;
        \Request::session()->forget('_BACKURL');
        session(['_BACKURL' => $arg_url]);
    }
    private function lookget_BACKURL(){
        $arg = session('_BACKURL');
        if($arg != null){
            for ($i = (count($arg) - 1); $i > 0 ; $i--) { 
                if($arg[$i] != \Request::fullUrl()){
                    $url = $arg[$i];
                    unset ($arg[$i]);
                    session(['_BACKURL' => $arg]);
                    return $url;
                }
            }
        }
        return asset($this->_URL); 
    }
    public function _validateRULE($role = null){
        $nameRoute =  \Route::currentRouteName();
        if(in_array($nameRoute, $this->_COMMONROUTE)) return true;
        $path = \Request::fullUrl();
        $controller = (\Route::getCurrentRoute()->getAction()["controller"]);
        $argclass = explode("@", $controller);
        $controller =  $argclass[0];
        $controller = str_replace("App\\Http\\Controllers\\","", $controller);
        $paths      = explode("/",$path);
        $lastPath   = trim($paths[count($paths) - 1]);
        foreach ($this->_ROLNAME as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if (strpos($path,'/' .$value2 . '/') !== false || $lastPath == $value2) {
                    $action = $key;
                    $this->_MODULE = \App\Models\Rules::_validateRULE($role,$controller,$action);
                    break;
                }
            }
        }
        if($this->_MODULE != null)
            return true;
        else
            return false;
    }
    public  function _GET_MENU(){
        $group_id =  $this->_USER->group_id;
        $menu = \App\Models\Menus::where("slug","=",$this->_MENU_ACTIVER)->first();
        if($menu){
            $items = \App\Models\MenuItems::where("menu_id","=",$menu->id)
            ->where(function ($query) use($group_id) {
                $query->where('role_allow', 'like', '%/'.$group_id.'/%')->orWhere('is_common', '=', 1);
            })->orderby("sort")->get();  
            return  $items;
        }
        return [];
    }
    public function _TREEMENUS($trees = [] ,$root = 0){
        if($root == 0) 
            echo  '<ul class="nav navbar-nav menu-header">';
        else 
            echo '<ul class="dropdown-menu">';
        foreach ($trees as $key => $value) {
            $check = $this->in_array_field($value->id, 'pid', $trees);
            if($value->pid == $root){
                unset($trees[$key]);
                echo '<li class="'.($check ? 'parent-li '.$value->class_name.'' : $value->class_name ).'" id="'.$value->id_name.'">
                   <a href="'.asset($value->path).'">'.$value->name.' '.($check ? '<span class="glyphicon glyphicon-triangle-bottom temrem"></span>' :'').' </a>';
                   if($check){
                        $this->_TREEMENUS($trees,$value->id);
                   }
                   
                echo '</li>';  
                if (strpos($value->class_name, 'affter-line') !== false) {
                    echo '<li role="separator" class="divider"></li>';
                }
            }   
        }
        echo '</ul>';
    }
    private function in_array_field($needle, $needle_field, $haystack, $strict = false) { 
        if ($strict) { 
            foreach ($haystack as $item) 
                if (isset($item->$needle_field) && $item->$needle_field === $needle) { 
                    return true; 
                }      
        } 
        else { 
            foreach ($haystack as $item) 
                if (isset($item->$needle_field) && $item->$needle_field == $needle) {
                    return true; 
                }
        } 
        return false; 
    }
}

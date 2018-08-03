<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Core\FrontendController;

class PagesController extends FrontendController
{
    function __construct() {
        $this->_ROLNAME["view"]    = array_merge($this->_ROLNAME["view"],
            [
                "dayview",
                "weekview",
                "terminsuche",
                "arbeitszeiten",
                "terminbuchung",
                "praxisdaten",
                "ubersetzung",
                "kennwort"
            ]
        );
        $this->_ROLNAME["add"] = array_merge($this->_ROLNAME["add"],
            [
                "arbeitszeitenadd",
            ]
        );
        parent::__construct();
        $this->_VIEW = "pages/";
        
    }
	public function index(){
    	return view($this->_FIXVIEW . $this->_VIEW .'page');
    }
    
    public function dashboard(){
    	$this->_DATA["mainClass"] = "dashboard-page";
        return view($this->_FIXVIEW . $this->_VIEW .'dashboard',$this->_DATA);
    }
    public function dayview(){
        $this->_DATA['userGroup'] = \App\Models\UserGroup::get();
    	$this->_DATA["mainClass"] = "dashboard-page";
        return view($this->_FIXVIEW . $this->_VIEW .'day-view',$this->_DATA);
    }
    public function terminsuche(){
    	$this->_DATA["mainClass"] = "dashboard-page search terminsuche";
        return view($this->_FIXVIEW . $this->_VIEW .'terminsuche',$this->_DATA);
    }
    public function arbeitszeiten(){
    	$this->_DATA["bodyClass"] = "home";
    	$this->_DATA["mainClass"] = "dashboard-page arbeitszeiten";
        return view($this->_FIXVIEW . $this->_VIEW .'arbeitszeiten',$this->_DATA);
    }
    public function ubersetzung(){
    	$this->_DATA["bodyClass"] = "home";
    	$this->_DATA["mainClass"] = "dashboard-page search ubersetzung";
        return view($this->_FIXVIEW . $this->_VIEW .'ubersetzung',$this->_DATA);
    }
    public function praxisdaten(){
    	$this->_DATA["bodyClass"] = "home";
    	$this->_DATA["mainClass"] = "dashboard-page praxisdaten";
        return view($this->_FIXVIEW . $this->_VIEW .'praxisdaten',$this->_DATA);
    }
	public function form(){
    	$this->_DATA["bodyClass"] = "home";
    	$this->_DATA["mainClass"] = "dashboard-page form";
        return view($this->_FIXVIEW . $this->_VIEW .'form',$this->_DATA);
    }
    public function adressen(){
    	$this->_DATA["bodyClass"] = "home";
    	$this->_DATA["mainClass"] = "dashboard-page form";
        return view($this->_FIXVIEW . $this->_VIEW .'adressen',$this->_DATA);
    }
    public function allgemein(){
    	$this->_DATA["bodyClass"] = "home";
    	$this->_DATA["mainClass"] = "dashboard-page form";
        return view($this->_FIXVIEW . $this->_VIEW .'allgemein',$this->_DATA);
    }
    public function atlastechniker (){
        return view($this->_FIXVIEW . $this->_VIEW .'atlastechniker');
    }
    public function terminbuchung(){
        
        $this->_DATA["mainClass"] = "dashboard-page terminbuchung-page";
        return view($this->_FIXVIEW . $this->_VIEW .'terminbuchung', $this->_DATA);
    }

    public function kennwort(){
        $this->_DATA["mainClass"] = "dashboard-page";
        return view($this->_FIXVIEW . $this->_VIEW .'kennwort', $this->_DATA);
    }

    public function arbeitszeitenadd(){
        $this->_DATA["mainClass"] = "dashboard-page";
        return view($this->_FIXVIEW . $this->_VIEW .'kennwort', $this->_DATA);
    }
   
}

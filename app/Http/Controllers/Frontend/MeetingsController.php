<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Core\FrontendController;
use Illuminate\Http\Request;
use Validator;
use DB;

class MeetingsController extends FrontendController
{
    function __construct() {
        parent::__construct();
        $this->_VIEW = "meetings/";
        $this->_TABLE = "atlantotec_setting_workings";
    }

	public function index(){
        $today = date('N');
        $meetings = DB::table('atlantotec_meetings as tbl1')
            ->join('atlantotec_meetings_setting as tbl2', 'tbl2.meeting_id', '=', 'tbl1.id')
            ->join('atlantotec_setting_workings as tbl3', 'tbl2.setting_work_id', '=', 'tbl3.id')
            ->where([["tbl1.user_id","=", $this->_USER->id],["tbl3.weekdays","LIKE", '%'.$today.'%']])
            ->select('tbl1.*','tbl2.setting_work_id','tbl3.time_from','tbl3.time_to')
            ->get();
        $this->_DATA['meetings'] = $meetings;
        $this->_DATA["bodyClass"] = "main-page dashboard-page";
        $this->_DATA["SettingWorkings"] = \App\Models\SettingWorkings::where([["user_id","=", $this->_USER->id]])->get();
        $this->_DATA["userGroup"] = \App\Models\Users::where([["group_id","=", $this->_USER->group_id]])->get();
    	$this->_DATA["mainClass"] = "dashboard-page arbeitszeiten";
        return view($this->_FIXVIEW . $this->_VIEW .'index',$this->_DATA);
    }

    public function get_setting_user(Request $request){
    	$data = array('status' => 'error');
    	$user_id = $request->user_id;
    	if($user_id != null){
    		$today = date('N',strtotime($request->today));
    		$setting = \App\Models\SettingWorkings::where([["user_id","=", $user_id],["weekdays","LIKE", '%'.$today.'%']])->get();
            $this->_DATA['user_id'] = $user_id;
			$this->_DATA['setting'] = $setting;
            $this->_DATA['all'] = $request->all();
            $this->_DATA["userGroup"] = \App\Models\Users::where([["group_id","=", $this->_USER->group_id]])->get();
			$data['status'] = 'success';
			$data['responsive'] = view($this->_FIXVIEW . $this->_VIEW .'get-user-setting',$this->_DATA)->render();
    	} 
    	return $data;
    }

    public function save_meeting(Request $request){
        $data = array('status' => 'error');
        $check = Validator::make($request->all(), [
            'gender' => "required",
            'first_name' => "required",
            'last_name' => "required",
            'email' => "required",
            'phone' => "required",
            'desired_treatment' => "required"
        ]);
        if ($check->fails() || count($request->setting_id) <= 0) {
            $data['status'] = 'fail';
            $data['message'] = 'Please enter all information'; 
            return $data;
        }
        if(@$request->meeting_id != null){
            $meeting = \App\Models\Meeting::find($request->meeting_id);
            if(@$meeting->id == null){
                $meeting = new \App\Models\Meeting;
                $meeting->user_id = $this->_USER->id;
            }
        }
        else{
            $meeting = new \App\Models\Meeting;
            $meeting->user_id = $this->_USER->id;
        }
        $table_meeting = 'atlantotec_meetings';
        $posts = $request->all();
        $columns = $this->_GetTableColumns($table_meeting);
        foreach ($posts as $key => $value) {
            if($key != "id" && $key != "doctor_id" && $key != "user_id"){
                if(in_array($key,$columns)){
                    $meeting->{$key} = ($value != null ? $value : ''); 
                }
               
            }
        }
        if($meeting->save()){
            \App\Models\MeetingWord::where([["meeting_id","=", $meeting->id]])->delete();
            if(isset($posts['setting_id']) && $posts['setting_id'] > 0){
                foreach ($posts['setting_id'] as $key => $item) {
                    $meetingword = new \App\Models\MeetingWord;
                    $meetingword->meeting_id = $meeting->id;
                    $meetingword->setting_work_id = $item;
                    $meetingword->save();
                }
            }
            $data['status'] = 'success';
        }
        return $data;
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

    public function destroy(Request $request){
        if($request->id){
            $this->_MODEL = \App\Models\SettingWorkings::find($request->id);
            if($this->_MODEL->user_id == $this->_USER->id) $this->_MODEL->delete();
            return json_encode($this->_MODEL);
        }
    }
}

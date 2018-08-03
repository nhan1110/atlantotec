<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $request)
    {  
    	if((isset($request->latitude) && $request->latitude!='') && (isset($request->longitude) && $request->longitude!=''))
        {
    		$latitude=$request->latitude;
    		$longitude=$request->longitude;
			$users_data=DB::select("SELECT *,( 3959 * acos(cos( radians(".$latitude.")) * cos(radians(latitude)) * cos( radians(longitude) - radians(".$longitude.")) + sin(radians(".$latitude.")) * sin(radians(latitude)))) AS distance FROM atlantotec_users WHERE group_id='5'");
    	}
    	else
		{
			$latitude="";
			$longitude="";
			$users_data=DB::select("SELECT * FROM atlantotec_users WHERE group_id='5'");
    	}
        if(count($users_data)>0)
        {
        	$user_lists=array();
        	foreach ($users_data as $data_array) {
        		if((isset($request->latitude) && $request->latitude!='') && (isset($request->longitude) && $request->longitude!=''))
        		{
        			$distance=str_replace(",", "", number_format($data_array->distance,2));
        		}
        		else
        		{
        			$distance="";
        		}
        		$user_lists[]=array('user_id'=>''.$data_array->id.'','firstname'=>$data_array->first_name,'lastname'=>$data_array->last_name,'email'=>$data_array->email,'contact_number'=>$data_array->contact_number,'website'=>$data_array->website,'facebook'=>$data_array->facebook,'avatar'=>$data_array->avatar,'address'=>$data_array->address,'language_id'=>''.$data_array->language_id.'','distance'=>$distance);
        	}
        	$result["status"]="1";
            $error = "success";
            $result["message"]=$error;
            $result["responseData"]=$user_lists;
        }
        else
        {
        	$result["status"]="0";
            $error = "data not found.";
            $result["message"]=$error;
        }	

        return $result;
    }
}

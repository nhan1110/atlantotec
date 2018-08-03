<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use Validator;
use Hash;
use Session;
use Auth;
class AccountController extends Controller {

	public function __construct(){
        //parent::__construct();

    }

	public function login(){
        if(session('user_info') != null){
            return redirect()->route("home");
        }
    	return view('account/login');
    }

    public function login_func(Request $request){
    	if(session('user_info') != null){
            return redirect()->route("home");
        }
        $check = Validator::make($request->all(), [
            "email" => "required|email",
            "pwd" => "required"
        ]);
        if ($check->fails()) {
            return redirect()->back()->with('type','danger')->with('message','Please enter all the fields in the inputs.');     
        }      

        $email = strtolower($request->email);
        $pwd = $request->pwd;
        $remember = ($request->remember == 1) ? true : false;
        if( Auth::attempt(['email' => $email, 'password' => $pwd], $remember) ){
            $record = Auth::user();
            session([ 'user_info' => $record]);
            if($remember){
                $record->remember_token = bcrypt(uniqid());
                $record->save();
                $minutes = ( 24 * 3 ) * 60 ;
                Cookie::queue('remember',$record->remember_token,$minutes);
            }
            return redirect()->route("meetings.dayview");
        }else{
            return redirect()->back()->with('type','danger')->with('message','Email or password is incorrect.');     
        }
    }

    public function register(){
        if(session('user_info') != null){
            return redirect()->route("home");
        }
        if($this->check_login()){
            return redirect()->route("home");
        } 
    	return view('account/register');
    }

    public function register_func(Request $request){
        if(session('user_info') != null){
            return redirect()->route("home");
        }
        $check = Validator::make($request->all(), [
            "email" => "required|email",
            "pwd" => "required|min:6",
            "first_name" => "required",
            "last_name" => "required",
            "address" => "required",
        ]);
        if ($check->fails()) {
            return redirect()->back()->with('type','danger')->with('message','Please enter all the fields in the inputs.');     
        }
      
        $email = $request->email;
        $password = $request->pwd;
        $address = $request->address;

        if (strlen($password) < 6) {
            return redirect()->back()->with('type','danger')->with('message','Password must have at least 6 characters.');
        }
        
        $is_exist_email = \App\Models\Users::where("email","=",$email)->first();
        if($is_exist_email != null){
        	return redirect()->back()->with('type','danger')->with('message','This email already existed. Please login.');
        }
        $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');
		$output= json_decode($geocode);
		$lat = @$output->results[0]->geometry->location->lat;
		$long = @$output->results[0]->geometry->location->lng;
        $user = new \App\Models\Users();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->contact_number = $request->phone;
        $user->latitude = ($lat != null ? $lat : 0);
        $user->longitude = ($long != null ? $long : 0);
        $user->email = $email;
        $user->status = 0;
        $user->token = md5(time());
        $user->password = Hash::make($password);
        if($user->save()){
            $url = route('verify', ['token' => $user->token]);
            $to = $user->email;
            $subject = 'Bitte bestätigen Sie Ihren Account bei atlantotec.com';
            $message = 'Hallo '.$user->first_name.'! Danke für Ihre Anmeldung im atlantotec.com, <br/>dem überregionalen Termin-Scout“. Bitte verifizieren Sie Ihre Emailadresse, damit wir Ihre Termine wie gewünscht online veröffentlichen können.<br/> Folgen Sie diesem LINK: <a href="'.$url.'">'.$url.'</a>';
            $headers = 'From: noreply@atlantotec.com' . "\r\n" .
                       'Reply-To: noreply@atlantotec.com' . "\r\n" .
                       'Content-Type: text/html; charset=ISO-8859-1' . "\r\n" .
                       'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
            return redirect()->back()->with('type','success')->with('message','Signup successfully. Please verify your email address');
        }else{
            return redirect()->back()->with('type','danger')->with('message','Error.');
        }
    }

    public function verify($token){
        if(session('user_info') != null){
            return redirect()->route("home");
        }
        $user = \App\Models\Users::where('token', $token)->first();
        if(@$user->email == null) {
            Session::flash('type', 'danger');
            Session::flash('message', 'This user is already verified.');
            return redirect()->route('login');
        }

        $user->status = 1;
        $user->token = null;
        $user->save();
        Session::flash('type','success');
        Session::flash('message', 'Ihr Account wurde erfolgreich bestätigt.');
        return redirect()->route('login');
    }

    public function reset(Request $request){
        if(session('user_info') != null){
            return redirect()->route("home");
        }
        $where = array(
            'email' => $request->email,
            'token' => $request->token
        );
        $user = \App\Models\Users::where($where)->first();
        if(@$user->email == null){
        	return redirect()->route("forgot");
        }
    	return view('account/reset');
    }

    public function reset_func(Request $request){
    	$validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'pwd' => 'required|confirmed|min:6'
        ]);
        if($request->pwd == null || $request->pwd != $request->confirm_pwd){
            return redirect()->back()->with('type','danger')->with('message','Passwörter stimmen nicht überein.');
        }

        $where = array(
            'email' => $request->email,
            'token' => $request->token
        );
        $user = \App\Models\Users::where($where)->first();
        if(@$user->email == null){
        	return redirect()->route("forgot");
        }

        if(@$user->email != null){
            $user->token = '';
            $user->password = Hash::make($request->pwd);
            $user->save();
            return redirect()->route("login")->with('type','success')->with('message', 'Passwort erfolgreich zurücksetzen Bitte loggen Sie sich ein.');
        } else {
            return redirect()->back()->with('type','danger')->with('message','Dieses Token zum Zurücksetzen des Kennworts ist ungültig.');
        }
    }

    public function forgot(){
    	if(session('user_info') != null){
            return redirect()->route("home");
        }
    	return view('account/forgot');
    }

    public function forgot_func(Request $request){
    	if(session('user_info') != null){
            return redirect()->route("home");
        }
    	$user = \App\Models\Users::where('email',$request->email)->first();
        if(@$user->email != null){
            $token = md5(time());
            $user->token = $token;
            $user->save();
            $url = route('reset', ['token' => $token,'email' => $user->email]);
        
            $to = $user->email;
            $subject = 'Reset password';
            $message = '<p>Hi ' . $user->first_name . ',</p>
                        <p style="margin:0">&nbsp;</p>
                        <p>You have requested to reset the password for your atlantotec.com account.</p>
                        <p>To reset your password at atlantotec.com, click the link below:<br/>
                        <a href="'.$url.'">'.$url.'</a><br/>
                        If clicking the link above doesn\'t work, please copy it into a new browser window.<br/><br/>
                        If you did not attempt to reset your password, or if you have already managed to retrieve your password, you can ignore this message and continue using atlantotec.com with your current password.</p>';
            $headers =  'From: noreply@atlantotec.com' . "\r\n" .
                        'Reply-To: noreply@atlantotec.com' . "\r\n" .
                        'Content-Type: text/html; charset=UTF-8' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
            return redirect()->back()->with('type','success')->with('message', 'eMail erfolgreich gesendet.');
        } else {
            return redirect()->back()->with('type','success')->withErrors(array('email' => "Wir können keinen Benutzer mit dieser E-Mail-Adresse finden."));
        }
    }

    public function logout(Request $request){
        $request->session()->forget("user_info");
        return redirect()->route("home");
    }
}
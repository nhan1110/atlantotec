<?php
namespace App\Http\Middleware;
use App;
use Closure;
use Request;
use App\Http\Controllers\Core\FrontendController;
class ProfilePage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //
        $user_info = session('user_info');
        if($user_info == null) return redirect()->route("login");
        //check url allow;
        if($user_info["group_id"]){
            $url = Request::url();
            $url = str_replace(asset("/"),"/",$url);
            $group_id = $user_info["group_id"];
            $items = \App\Models\MenuItems::where("path","=",$url)
            ->where(function ($query) use ($group_id) {
                $query->where('role_allow', 'like', '%/'.$group_id.'/%')->orWhere('is_common', '=', 1);
            })->orderby("sort")->first(); 
            $FrontendController = new FrontendController();
            $AllowURL = $FrontendController->_validateRULE($group_id);
            if($items == null  && $AllowURL == false){
                if(\Request::ajax() == false){
                    return Redirect(route("notallow"));  
                }else{
                    return Redirect(route("notallowajax")); 
                }   
            }
        }
        return $next($request);
    }
}

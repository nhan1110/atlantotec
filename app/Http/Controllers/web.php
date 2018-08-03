<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
})->name('home');

/*Account*/
$groupFolder = "Frontend";
$fixname = "backend";
Route::get('/login',"$groupFolder\AccountController@login")->name('login');
Route::post('/login',"$groupFolder\AccountController@login_func")->name('login');
Route::get('/register',"$groupFolder\AccountController@register")->name('register');
Route::post('/register',"$groupFolder\AccountController@register_func")->name('register');
Route::get('/reset',"$groupFolder\AccountController@reset")->name('reset');
Route::post('/reset',"$groupFolder\AccountController@reset_func")->name('reset');
Route::get('/forgot',"$groupFolder\AccountController@forgot")->name('forgot');
Route::post('/forgot',"$groupFolder\AccountController@forgot_func")->name('forgot');
Route::get('/verify/{token}', "$groupFolder\AccountController@verify")->name('verify');
Route::get('/logout', "$groupFolder\AccountController@logout")->name('logout');
/*Profile*/

Route::group(['middleware' => ["ProfilePage","web"]],function() use($groupFolder){

    //page controller
        Route::get('/notallowajax',"$groupFolder\PagesController@dashboard")->name('notallowajax');
        Route::get('/notallow',"$groupFolder\PagesController@dashboard")->name('notallow');
        Route::get('/weekview',"$groupFolder\PagesController@dashboard")->name('weekview');
        Route::get('/dayview',"$groupFolder\PagesController@dayview")->name('dayview');
        Route::get('/terminsuche',"$groupFolder\PagesController@terminsuche")->name('terminsuche');
        Route::get('/ubersetzung',"$groupFolder\PagesController@ubersetzung")->name('ubersetzung');
        Route::get('/praxisdaten',"$groupFolder\PagesController@praxisdaten")->name('praxisdaten');
        Route::get('/form',"$groupFolder\PagesController@form")->name('form');
        Route::get('/pages',"$groupFolder\PagesController@index")->name('pages');
        Route::get('/adressen',"$groupFolder\PagesController@adressen")->name('adressen');
        Route::get('/allgemein',"$groupFolder\PagesController@allgemein")->name('allgemein');
        Route::get('/atlastechniker',"$groupFolder\PagesController@atlastechniker")->name('atlastechniker');
        Route::get('/terminbuchung',"$groupFolder\PagesController@terminbuchung")->name('terminbuchung');
        Route::get('/kennwort',"$groupFolder\PagesController@kennwort")->name('kennwort');
    //!page controller
    //settings controller
        Route::get('/settings',"$groupFolder\SettingsController@index")->name('settings');
        Route::post('/settings/store',"$groupFolder\SettingsController@store")->name('settings.store');
        Route::post('/settings/destroy',"$groupFolder\SettingsController@destroy")->name('settings.destroy');
    //!settings controller 
    //meetings controller
        Route::get('/meetings/day-view',"$groupFolder\MeetingsController@index")->name('meetings.dayview');
        Route::post('/meetings/get-setting-user',"$groupFolder\MeetingsController@get_setting_user")->name('meetings.getsettinguser');
        Route::post('/meetings/save-meeting',"$groupFolder\MeetingsController@save_meeting")->name('meetings.savemeeting');
        Route::post('/meetings/store',"$groupFolder\MeetingsController@store")->name('meetings.store');
        Route::post('/meetings/destroy',"$groupFolder\MeetingsController@destroy")->name('meetings.destroy');
    //!meetings controller 
});

//-----------------------------------backend route-----------------------------------//
//login dashboard

$groupFolder = "Backend";
$fixname = "backend";
Route::group(['prefix' => $fixname],function() use ($groupFolder,$fixname){
    $acountsRoutes = [
        [
            // login get
            "url"       => "/login",
            "controler" =>  $groupFolder."\AcountController@getlogin",
            "name"      => $fixname.".getlogin",
            "type"      => "get" 
        ],
        [
            // login post
            "url"       => "/login",
            "controler" =>  $groupFolder."\AcountController@postlogin",
            "name"      => $fixname.".postlogin",
            "type"      => "post"
        ]
        
    ];
    foreach ($acountsRoutes as $key => $value) {
        Route::{$value["type"]}($value["url"],$value["controler"])->name($value["name"]);
    }
});
Route::group(['middleware' => $groupFolder ,'prefix' => $fixname],function() use ($groupFolder,$fixname){
    $backendRoutes = [
        /*-------------------------------Dashboard--------------------------*/
		[
			// Dashboard
			"url"       => "/",
	    	"controler" => $groupFolder."\DashboardController@index",
	    	"name"      => $fixname.".dashboard",
	    	"type"      => "get"
		],
        [
            // Dashboard
            "url"       => "/notallow",
            "controler" => $groupFolder."\DashboardController@notallow",
            "name"      => $fixname.".dashboard.notallow",
            "type"      => "get"
        ],
        [
            // Dashboard
            "url"       => "/notallowajax",
            "controler" => $groupFolder."\DashboardController@notallowajax",
            "name"      => $fixname.".dashboard.notallowajax",
            "type"      => "get"
        ],

        [
            // login post
            "url"       => "/logout",
            "controler" => $groupFolder."\DashboardController@getlogout",
            "name"      => $fixname.".dashboard.logout",
            "type"      => "get"
        ],
        /*-------------------------------!Dashboard--------------------------*/
        /*-------------------------------menus--------------------------*/
        
        [
            // menus additem
            "url"       => "/menus/additem/{id}",
            "controler" => $groupFolder."\MenusController@additem",
            "name"      => $fixname.".menus.additem",
            "type"      => "get"
        ],
        [
            // menus edititem
            "url"       => "/menus/edititem/{id}",
            "controler" => $groupFolder."\MenusController@edititem",
            "name"      => $fixname.".menus.edititem",
            "type"      => "get"
        ],
        [
            // menus updateitem
            "url"       => "/menus/updateitem/{id}",
            "controler" => $groupFolder."\MenusController@updateitem",
            "name"      => $fixname.".menus.updateitem",
            "type"      => "post"
        ],
        
        [
            // menus destroy
            "url"       => "/menus/destroyitem/{id}",
            "controler" =>  $groupFolder."\MenusController@destroyitem",
            "name"      => $fixname.".menus.destroyitem",
            "type"      => "get"
        ],
        [
            // menus destroy
            "url"       => "/menus/storeitem/{id}",
            "controler" => $groupFolder."\MenusController@storeitem",
            "name"      => $fixname.".menus.storeitem",
            "type"      => "post"
        ],
        [
            // menus destroy
            "url"       => "/menus/viewtree/{id}",
            "controler" => $groupFolder."\MenusController@viewtree",
            "name"      => $fixname.".menus.viewtree",
            "type"      => "get"
        ],
        [
            // menus updatesort
            "url"       => "/menus/updatesort/{id}",
            "controler" => $groupFolder."\MenusController@updatesort",
            "name"      => $fixname.".menus.updatesort",
            "type"      => "post"
        ],
        /*-------------------------------!menus--------------------------*/

        /*-------------------------------roles--------------------------*/
        [
            // roles rules
            "url"       => "/roles/rules/{id}",
            "controler" => $groupFolder."\RolesController@rules",
            "name"      => $fixname.".roles.rules",
            "type"      => "get"
        ],
        [
            // roles rules
            "url"       => "/roles/updaterules/{id}",
            "controler" => $groupFolder."\RolesController@updaterules",
            "name"      => $fixname.".roles.updaterules",
            "type"      => "post"
        ],
        /*-------------------------------!modules--------------------------*/
        [
            // modules updatesort
            "url"       => "/modules/updatesort",
            "controler" =>  $groupFolder."\ModulesController@updatesort",
            "name"      => $fixname.".modules.updatesort",
            "type"      => "post"
        ], 
        /*-------------------------------!modules--------------------------*/

        /*-------------------------------groups--------------------------*/
         [
            // groups rules
            "url"       => "/groups/rules/{id}",
            "controler" => $groupFolder."\GroupsController@rules",
            "name"      => $fixname.".groups.rules",
            "type"      => "get"
        ],
        [
            // roles rules
            "url"       => "/groups/updaterules/{id}",
            "controler" => $groupFolder."\GroupsController@updaterules",
            "name"      => $fixname.".groups.updaterules",
            "type"      => "post"
        ],
        /*-------------------------------!groups--------------------------*/

    ];
    foreach ($backendRoutes as $key => $value) {
    	Route::{$value["type"]}($value["url"],$value["controler"])->name($value["name"]);
    }
    $modules = App\Models\Modules::where([["status","=",1],["is_sys" ,"=" ,1]])->get();
    $routes = [
        [
            "url"    => "",
            "type"   => "get",
            "action" => "index",
            "name"   => ""
        ],
        [
            "url"    => "create",
            "type"   => "get",
            "action" => "create",
            "name"   => ".create"
        ],
        [
            "url"    => "store",
            "type"   => "post",
            "action" => "store",
            "name"   => ".store"
        ],
        [
            "url"    => "edit/{id}",
            "type"   => "get",
            "action" => "edit",
            "name"   => ".edit"
        ],
        [
            "url"    => "update/{id}",
            "type"   => "post",
            "action" => "update",
            "name"   => ".update"
        ],
        [
            "url"    => "destroy/{id}",
            "type"   => "get",
            "action" => "destroy",
            "name"   => ".destroy"
        ]
    ];
    if($modules){
         foreach ($modules as $key => $value) {
            $urllist        = $value->route;
            $strController  = strtoupper( substr( $urllist, 0, 1 ) ).substr( $urllist, 1 );
            $strController  = $strController."Controller";
            foreach ($routes as $key_route => $value_route) {
                $controller      = $value->controller."@".$value_route['action'];
                $router = [
                    "url"       => $urllist  ."/". $value_route["url"],
                    "controler" => $controller,
                    "name"      => $fixname."." .$urllist . $value_route["name"],
                    "type"      => $value_route["type"]
                ];
                Route::{$router["type"]}($router["url"],$router["controler"])->name($router["name"]);
            }
        }
    }
    
});
//!----------------------------------backend route-----------------------------------//
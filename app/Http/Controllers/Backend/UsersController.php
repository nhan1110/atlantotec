<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
use Validator;
use Redirect;
class UsersController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct();   
        $this->_TABLE = "atlantotec_users";
        $this->_ROUTE = "users";
        $this->_URL   = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_DATA["_PAGETILE"] = "Manage users";    
        $this->_DATA["_ROUTE_ADD"] = route($this->_ROUTE_FIX.".".$this->_ROUTE . ".create");   
    }
    public function index()
    {  
        $table = [
            [
                "label" => "First name",
                "key"   => "first_name"
            ],
            [
                "label" => "Last name",
                "key"   => "last_name"
            ],
            [
                "label" => "Email",
                "key"   => "email"
            ],
            [
                "label" => "Contact number",
                "key"   => "contact_number"
            ],
            [
                "label"   => "Group",
                "key"     => "group_id",
                'type'    => 'option',
                'options' =>  \App\Models\Roles::where("is_sys","=",0)->get()->toArray(),
                "option_key"     => "id",
                "option_value"   =>"name"
            ],
            [
                "label"   => "Status",
                "key"     => "status",
                'type'    => 'option',
                'options' => [
                    ['id' => 0 ,'name' => "Deactive" ],
                    ['id' => 1 ,'name' => "Active" ]
                ],
                "option_key"     => "id",
                "option_value"   =>"name"
            ],
        ];
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_MODEL = \App\Models\Users::where("is_sys","=",0)->paginate($this->_PAGINGNUMBER);
        return $this->_ListItem($table);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group          =  \App\Models\Roles::where("is_sys","=",0)->get()->toArray();
        $languages      =  \App\Models\Language::get()->toArray();
        $availability   =  \App\Models\Availability::get()->toArray();
        $form = [
            "first_name" => [
                "label" =>  "First name",
                "type"  => "text",
                "value" => old("first_name"),
                "required" => true

            ],
            "last_name" => [
                "label" =>  "Last name",
                "type"  => "text",
                "value" => old("last_name"),
                "required" => true
            ],
            "email" => [
                "label"    => "Email",
                "type"     => "text",
                "value"    => old("email"),
                "required" => true,
                "validate" => "required|email|unique:$this->_TABLE,email"
            ],
            "password" => [
                "label" => "Password",
                "type"  => "password",
                "value" => old("password"),
                "required" => true
            ],
            "contact_number" => [
                "label" => "Contact number",
                "value" => old("contact_number"),
                "type" => "text"
            ],
            "address" => [
                "label" => "Address",
                "value" => old("address"),
                "type" => "text"
            ],
            "website" => [
                "label" =>  "Website",
                "type"  => "text",
                "value" => old("website"),
                "required" => false
            ],
            "facebook" => [
                "label" =>  "Facebook",
                "type"  => "text",
                "value" => old("facebook"),
                "required" => false
            ],
            "longitude" => [
                "label" =>  "Longitude",
                "type"  => "text",
                "value" => old("longitude"),
                "required" => false
            ],
            "latitude" => [
                "label" =>  "Latitude",
                "type"  => "text",
                "value" => old("latitude"),
                "required" => false
            ],
            "avatar" => [
                "label" => "Avatar",
                "type" => "file",
                "attr" => [
                    "accept" => "image/*"
                ]
            ],
            "group_id" => [
                "label"           => "Group user",
                "type"            => "radio",
                "value"           => old("group_id") ? old("group_id") : 0,
                "options"         => $group,
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value"           => 0
            ],
            "language_id" => [
                "label"           => "Language",
                "type"            => "radio",
                "value"           => old("language_id") ? old("language_id") : 0,
                "options"         => $languages,
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
            ],
            "availability_id" => [
                "label"           => "Availability",
                "type"            => "radio",
                "value"           => old("availability_id") ? old("availability_id") : 0,
                "options"         => $availability,
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "value"           => old("status"),
                "options"         => [["id" => 1 ,"name" => "Active"],["id" => 0 ,"name" => "Deactive"]],
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value"           => 1
            ]
        ];
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".store");
        $this->_DATA["_PAGETILE"] =  $this->_DATA["_PAGETILE"] . ' - ' . 'Addnew'; 
        return $this->_CreateItem($form);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_MODEL = new \App\Models\Users(); 
        return $this->_StoreItem($request); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$this->_DetailItem();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = \App\Models\Users::find($id);
        $group          =  \App\Models\Roles::where("is_sys","=",0)->get()->toArray();
        $languages      =  \App\Models\Language::get()->toArray();
        $availability   =  \App\Models\Availability::get()->toArray();
        $form = [
            "first_name" => [
                "label" =>  "First name",
                "type"  => "text",
                "value" => $item->first_name,
                "required" => true

            ],
            "last_name" => [
                "label" =>  "Last name",
                "type"  => "text",
                "value" => $item->last_name,
                "required" => true
            ],
            "email" => [
                "label"    => "Email",
                "type"     => "text",
                "value"    =>  $item->email,
                "required" => true,
                "validate" => "required|email|unique:$this->_TABLE,email,$item->id,id"
            ],
            "password" => [
                "label" => "Password",
                "type"  => "password",
                "required" => false
            ],
            "contact_number" => [
                "label" => "Contact number",
                "value" => $item->contact_number,
                "type" => "text"
            ],
            "address" => [
                "label" => "Address",
                "value" =>  $item->address,
                "type" => "text"
            ],
            "website" => [
                "label" =>  "Website",
                "type"  => "text",
                "value" => $item->website,
                "required" => false
            ],
            "facebook" => [
                "label" =>  "Facebook",
                "type"  => "text",
                "value" => $item->facebook,
                "required" => false
            ],
            "longitude" => [
                "label" =>  "Longitude",
                "type"  => "text",
                "value" => $item->longitude,
                "required" => false
            ],
            "latitude" => [
                "label" =>  "Latitude",
                "type"  => "text",
                "value" => $item->latitude,
                "required" => false
            ],
            "avatar" => [
                "label"  => "Avatar",
                "type"   => "file",
                "value"  => $item->avatar,
                "attr"   => [
                    "accept" => "image/*"
                ]
            ],
            "group_id" => [
                "label"           => "Group user",
                "type"            => "radio",
                "value"           => $item->group_id,
                "options"         => $group,
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
            ],
            "language_id" => [
                "label"           => "Language",
                "type"            => "radio",
                "value"           => $item->language_id,
                "options"         => $languages,
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => false,
            ],
            "availability_id" => [
                "label"           => "Availability",
                "type"            => "radio",
                "value"           => $item->availability_id,
                "options"         => $availability,
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => false,
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "value"           => $item->status,
                "options"         => [["id" => 1 ,"name" => "Active"],["id" => 0 ,"name" => "Deactive"]],
                "options_value"   => "id",
                "options_label"  => "name",
                "required"        => true,
                "value"           => 1
            ]
        ];
        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".update",["id" => $id]); 
        $this->_DATA["_PAGETILE"] =  $this->_DATA["_PAGETILE"] . ' - ' . 'Edit';
        return $this->_EditItem($form);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->_MODEL = \App\Models\Users::find($id); 
        return $this->_StoreItem($request);   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_MODEL = \App\Models\Users::find($id); 
        return $this->_DestroyItem();
    }
}

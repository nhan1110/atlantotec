<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Core\BackendController;
use Validator;
use Redirect;
class LanguagesController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct(); 
        $this->_ROUTE = "languages";
        $this->_TABLE = "atlantotec_languages";
        $this->_URL   = route($this->_ROUTE_FIX.".".$this->_ROUTE); 
        $this->_DATA["_PAGETILE"] = "Languages";    
        $this->_DATA["_ROUTE_ADD"] = route($this->_ROUTE_FIX.".".$this->_ROUTE . ".create");   
    }

    public function index()
    {  
        $table = [
            [
                "label" => "Name",
                "key"   => "name"
            ],
            [
                "label" => "Code",
                "key"   => "slug"
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
        $this->_MODEL = \App\Models\Language::where("id","!=","")->paginate($this->_PAGINGNUMBER);
        return $this->_ListItem($table);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "value" => old("name"),
                "required" => true

            ],
            "slug" => [
                "label" =>  "Code",
                "type"  => "text",
                "value" => old("slug"),
                "required" => true
            ],
            
            "icon" => [
                "label" => "Icon",
                "type" => "file",
                "attr" => [
                    "accept" => "image/*"
                ]
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
        $this->_DATA["_PAGETILE"] =  $this->_DATA["_PAGETILE"]; 
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
        $this->_MODEL = new \App\Models\Language(); 
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
        $item = \App\Models\Language::find($id);
        $form = [
            "name" => [
                "label" =>  "Name",
                "type"  => "text",
                "value" => $item->name,
                "required" => true

            ],
            "slug" => [
                "label" =>  "Code",
                "type"  => "text",
                "value" => $item->slug,
                "required" => true
            ],
            "icon" => [
                "label"   => "Icon",
                "type"    => "file",
                "value"   => \Storage::url($item->icon),
                "attr"    => [
                    "accept" => "image/*"
                ]
            ],
            "status" => [
                "label"           => "Status",
                "type"            => "radio",
                "value"           => $item->status,
                "options"         => [["id" => 1 ,"name" => "Active"],["id" => 0 ,"name" => "Deactive"]],
                "options_value"   => "id",
                "options_label"   => "name",
                "required"        => true
            ]
        ];

        $this->_DATA["_ROUTE"] = route($this->_ROUTE_FIX.".".$this->_ROUTE.".update",["id" => $id]); 
        $this->_DATA["_PAGETILE"] =  $this->_DATA["_PAGETILE"];
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
        $this->_MODEL = \App\Models\Language::find($id); 
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
        $this->_MODEL = \App\Models\Language::find($id); 
        return $this->_DestroyItem();
    }
}

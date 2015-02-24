<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResourcesController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        $this->middleware('auth',['except' => "getIndex"]);
	}


    public function getIndex()
    {
        $resources = \App\Resources::all();
        return view("resources.index",compact("resources"));
    }


	public function getCreate()
	{
        return view("admin/resources/create");
	}

	public function postCreate(Requests\CreateResourcesRequest $request)
	{
        $this->validate($request,$this->getRules());
        $data = $request->all();
        //$data["user_id"] = \Auth::user()->id;
        \App\Resources::create($data);
        return \Redirect::to("/");
	}

    public function getEdit($id)
    {
        //return $id;
        $resource = \App\Resources::find($id);
            return view("admin/resources/edit")
                ->with("resource",$resource);
    }
    public function postEdit(\Illuminate\Http\Request $request,$id)
    {
        $this->validate($request,$this->getRules());
        $data = $request->all();
        $resource = \App\Resources::where("id",$id)->first();
        $resource["description"] = $data["description"];
        $resource["url"] = $data["url"];
        $resource->save();

        return \Redirect::to("/");
    }
    public function getDelete($id)
    {
        $resource = \App\Resources::where("id",$id)->first();
        $resource->delete();
        return \Redirect::to("/");
    }

    public function getRules()
    {
        return ["description"=>"required","url"=>"required"];
    }

}

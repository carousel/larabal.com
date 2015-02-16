<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        $this->middleware('auth');
	}


	public function getCreate()
	{
        return view("admin/news/create");
	}
	public function postCreate(Requests\CreateNewsRequest $request)
	{
        $this->validate($request,$this->getRules());
        $data = $request->all();
        $data["user_id"] = \Auth::user()->id;
        \App\News::create($data);
        return \Redirect::to("/");
	}

    public function getEdit($id)
    {
        //return $id;
        $new = \App\News::find($id);
        if($new->user_id == \Auth::user()->id){
            return view("admin/news/edit")
                ->with("new",$new);
        }else{
            return \Redirect::to("/")
                ->with("message","You are not authorized to edit this content");
        }
    }
    public function postEdit(\Illuminate\Http\Request $request,$id)
    {
        $this->validate($request,$this->getRules());
        $data = $request->all();
        $new = \App\News::where("id",$id)->first();
        $new["user_id"] = \Auth::user()->id;
        $new["description"] = $data["description"];
        $new["href"] = $data["href"];
        $new->save();

        return \Redirect::to("/");
    }
    public function getDelete($id)
    {
        $new = \App\News::where("id",$id)->first();
        if($new->user_id == \Auth::user()->id){
            $new->delete();
        }else{
            return \Redirect::to("/")
                ->with("message","You are not authorized to delete this content");
        }
            return \Redirect::to("/");
    }
    public function getRules()
    {
        return ["description"=>"required","href"=>"required"];
    }

}

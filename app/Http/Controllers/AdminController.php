<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Miro\Mailman\Mailman;

use Illuminate\Http\Request;

class AdminController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Mailman $mailman)
	{
		$this->middleware('auth');
        $this->mailman = $mailman;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{

        if(\Auth::user()->role == "admin+"){
            $posts = \App\Post::all();
            $subs = \App\Subs::all();
            $count_posts = count($posts);
            return view("admin.index")
                ->with("count_posts",$count_posts)
                ->with("subs",$subs);
        }
        if(\Auth::user()->role == "admin"){
            $posts = \App\Post::where("user_id",\Auth::user()->id)->get();
            $count_posts = count($posts);
            $status = \App\Subs::where("email",\Auth::user()->email)->get();
            return view("admin.index")
                ->with("count_posts",$count_posts)
                ->with("status",$status);
        }
	}
    public function getAdminPlusArea()
    {
        return view("admin.admin-plus");
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
    public function createUser(\Illuminate\Http\Request $request)
    {
        $this->validate($request,$this->getRulesForUser());
        $plain_password = \Illuminate\Support\Str::random(8);
        $user = new \App\User;
        $user->name = $request->get("name");
        $user->email = $request->get("email");
        $user->password = \Hash::make($plain_password);
        $user->role = $request->get("role");
        $user->save();
        $email = $user->email;

        $this->mailman->send('admin.emails.account',["plain_password" => $plain_password],function($message) use ( $email ){
            $message->to($email)
                ->subject("Your account on larabal.com has been created.");
        });

        return \Redirect::to("/admin/admin-plus")
            ->with("message_success","New account on larabal.com has been created.");
    }

    public function getRulesForUser()
    {
        return [
            "name"=>"required|max:30",
            "email"=>"required|unique:users",
            "role"=>"required"
        ];
        
    }

}

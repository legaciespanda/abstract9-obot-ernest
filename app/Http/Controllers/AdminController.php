<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of registered users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$users = User::paginate(8);
         return view('admin', compact(['users']));
    }
	
    public function unverified()
    {
		$user = Auth::user();
         return view('unverified', compact(['user']));
    }

    /**
     * Show the form for creating a new users.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified user data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified user data in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified user from database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function activate_user_ajax(Request $request){
		$id = $request->id;
       $users = User::where('id', $id)->first();
        if (is_null($users)) {
            $users = new User;
			$users->account_verified = $request->account_verified;
			$users->save();
		}else{
			$users->account_verified = $request->account_verified;
			$users->save();	
		}
	}
	
	public function deactivate_user_ajax(Request $request){
		$id = $request->id;
       $users = User::where('id', $id)->first();
        if (is_null($users)) {
            $users = new User;
			$users->account_verified = $request->account_verified;
			$users->save();
		}else{
			$users->account_verified = $request->account_verified;
			$users->save();	
		}
	}
	
	public function delete_user_ajax(Request $request){
		$id = $request->id;
		$data = User::destroy($id);
		//return Response::json($data);
	}
}

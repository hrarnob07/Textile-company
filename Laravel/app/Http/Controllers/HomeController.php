<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login(){
        
        return view('auth.login');
    }

    public function updateUserInfo(request $request){
       //echo $request->name; die(); 
       $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password'
            
        ]);
        
        $user = User::find(\Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/admin/user')->with('status', 'Updated Successfully !');
    }
    public function user(){
        return view('admin.page.edituser');
    }public function unlock(){
        return view('admin.page.unlock');
    }
}

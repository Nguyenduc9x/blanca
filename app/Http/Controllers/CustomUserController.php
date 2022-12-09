<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomUserController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.Registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered successfuly');
        }else{
            return back()->with('fail','Something wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $user = User::where('email', '=', $request->email)->first();

        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);

                return redirect('dashboard');
            } else {
                return back()->with('fail','Password not match.');
            }
        }else {
            return back()->with('fail','This email is not registered.');
        }
        

    }

    public function dashboard()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=' ,Session::get('loginId'))->first();
        }
        return view("dashboard",compact('data'));
    }
    
    public function changepassword()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=' ,Session::get('loginId'))->first();
        }
        return view("Pages.admin.changepassword",compact('data'));
    }

    public function myprofile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=' ,Session::get('loginId'))->first();
        return view("Pages.admin.myprofile",compact('data'));
        }


    }   

    public function userlist()
    {
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=' ,Session::get('loginId'))->first();
        return view("Pages.admin.userlist",compact('data'));
    }
    }
        public function logined(Request $request)
    {
    // Retrieve the currently authenticated user...
    $user = Auth::user();

    // Retrieve the currently authenticated user's ID...
    $id = Auth::id();
    }

    public function logout()
    {
        if(Session::has('loginId')) 
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }


}



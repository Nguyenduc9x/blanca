<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.Registration");
    }

    public function registerAuthor(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:author',
            'password'=>'required|min:5|max:12'
        ]);

        $author = new Author();
        $author->name = $request->name;
        $author->email = $request->email;
        $author->password = Hash::make($request->password);
        $res = $author->save();
        if($res){
            return back()->with('success','You have registered successfuly');
        }else{
            return back()->with('fail','Something wrong');
        }
    }

    public function loginAuthor(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $author = Author::where('email', '=', $request->email)->first();

        if($author){
            if(Hash::check($request->password,$author->password)){
                $request->session()->put('loginId',$author->id);
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
        return view("dashboard");
    }
    
    public function logined(Request $request)
    {
    // Retrieve the currently authenticated user...
    $author = Auth::author();
    
    // Retrieve the currently authenticated user's ID...
    $id = Auth::id();
    }

}


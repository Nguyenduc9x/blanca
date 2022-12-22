<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'You have registered successfuly, now you can login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }

        return  redirect('login')->with('success', 'Login details are not valid');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->with('success', 'You are not allowed to access');
    }

    public function myprofile()
    {
        if (Auth::check()) {
            return view('Pages.admin.myprofile');
        }

        return redirect('login')->with('success', 'You are not allowed to access');
    }

    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'min:4|string|max:255',
            'email' => 'email|string|max:255',
            'date_birth' => 'date|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        // dd($request->all());
        $imageName = time() . '.' . $request->image->extension(); 
        $user =Auth::user();
        // $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->image = $request['image']->storeAs('public/storage',$imageName);
        $user->bio = $request['bio'];
        $user->date_birth = $request['date_birth'];
        $user->save();



        return back()->with('success', 'Update success');
    }
    
    public function changepassword()
    {
        if (Auth::check()) {
            return view('Pages.admin.changepassword');
        }

        return redirect('login')->with('success', 'You are not allowed to access');
    }

    public function userchangepassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:5|max:12|same:repeatpassword',
            'repeatpassword' => 'required|min:5|max:12',
        ]);
        
        $user =Auth::user();
        $user->password = Hash::make($request['password']);
        $user->save();
        
        return back()->with('success', 'Your password has been changed successfully');
    }
    



    public function userlist()
    {
        $data = DB::table('users')->paginate(10);
        return view('Pages.admin.userlist',compact('data'));
    }


    public function logined(Request $request)
    {
        // Retrieve the currently authenticated user...
        $user = Auth::user();

        // Retrieve the currently authenticated user's ID...
        $id = Auth::id();
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }

    public function useredit(Request $request)
    {
        $request->validate([
            'name' => 'min:4|string|max:255',
            'email' => 'email|string|max:255',
        ]);
        
        $useredit = [
            'name' => $request->name,
            'email' => $request->email
        ];
        // return dd($useredit);

        DB::table('users')->Where('id',$request->id)->update($useredit);
        return redirect()->back()->with('userUpdate','Changed');
    }

}
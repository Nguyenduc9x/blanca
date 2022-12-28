<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Carbon;
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
            // 'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        // dd($request->all());
        $imageName = time() . '.' . $request->file('image')->extension(); 
        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->image = $request['image']->storeAs('storage',$imageName);
        $user->bio = $request['bio'];
        $user->date_birth = Carbon::parse($request['date_birth'])->format('Y-m-d');
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

    public function getUsers(){
        $users = User::all();
 
        return view('Pages.admin.userlist')->with('users', $users);
    }
 
    public function update(Request $request, $id){
        $user = User::find($id);
        $input = $request->all();
        $user->fill($input)->save();
 
        return redirect('/userlist')->with('success','updated');
    }
 
    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
  
        return redirect('/userlist')->with('success','deleted');
    }

    public function postlist()
    {
        $data = DB::table('post')->paginate(10);
        return view('Pages.admin.post',compact('data'));
    }

    public function newpost()
    {
        $category = Category::all();
        return view('Pages.admin.addnew.newpost',compact('category'));
    }
    
    public function addpost(Request $request)
    {
        $request->validate([
            'name' => 'min:4|string|max:255',
            '' => 'email|string|max:255',
            'date_birth' => 'date|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        // dd($request->all());
        $imageName = time() . '.' . $request->file('image')->extension(); 
        
        $post = new Post();
        $post->name = $request['name'];
        $post->content = $request['content'];
        $post->image = $request['image']->storeAs('postimage',$imageName);
        $post->category_id = $request['category_id'];
        $post->save();

        return redirect('')->with('message','Post added Success');

    }

    public function category()
    {
        $data = DB::table('category')->paginate(2);
        return view('Pages.admin.category',compact('data'));
    }

    public function categorypost()
    {
        $category = Category::all();
        // dd($category);
        return view('Pages.admin.addnew.newpost',compact('category'));
    }

    public function addnew(Request $request){
        // dd($request->all());
        $category = new Category;
        $category->name = $request['name'];
        $category->description = $request['description'];
        $category->save();
        
        return redirect('/category')->with('success','added');
    }

    public function deletepost($id)
    {
        $users = Post::find($id);
        $users->delete();
  
        return redirect('/post')->with('success','deleted');
    }
}
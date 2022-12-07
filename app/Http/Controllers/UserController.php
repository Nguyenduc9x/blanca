<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function changepassword()
    {
        return view("Pages.admin.changepassword");
    }

    public function myprofile()
    {
        return view("Pages.admin.myprofile");
    }
}

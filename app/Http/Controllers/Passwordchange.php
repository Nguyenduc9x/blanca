<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordChange extends Controller
{
    public function passwordchange()
    {
        return view("Pages.admin.passwordchange");
    }
}

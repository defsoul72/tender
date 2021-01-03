<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AdminController extends Controller
{
     function loginAdmin(Request $req)
    {
        $admin= Admin::where(['email_Admin'=>$req->email_Admin])->first();
        if(!$admin || !Hash::check($req->password_Admin,$admin->password_Admin))
        {
            return "Username or password is not matched";
        }
        else
        {
            $req->session()->put('admin',$admin);
            return redirect('/');
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    public function registerPost(Request $request)
    {
        $request->validate([
            "name"      =>  "required|min:3",
            "email"     =>  "required|email|unique:users",
            "password"  =>  "required|min:8"
        ]);

        $userInfo["name"]       =   $request->name;
        $userInfo["email"]      =   $request->email;
        $userInfo["password"]   =   Hash::make($request->password);

        $user   =   User::create($userInfo);

        if($user)
        {
            return redirect()->route("login")->with("success", "Account Created Successfully");
        }
        else
        {
            return redirect()->route("register")->with("error", "Failed to create account");
        }
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            "email"     =>  "required|email",
            "password"  =>  "required|min:8"
        ]);

        $user   =   $request->only("email", "password");

        if(Auth::attempt($user))
        {
            return redirect()->route("home")->with("success", "Login Successful");
        }
        else
        {
            return redirect()->route("login");
        }
    }
}

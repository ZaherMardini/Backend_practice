<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister(){
        return view("auth.register");
    }
    public function showLogin(){
        return view("auth.login");
    }
    public function register(Request $request){
        $validated = $request->validate(
            [
                "name" => "max:10|required|string",
                "email" => "required|email|unique:users",
                "password" => "string|min:8|confirmed|required"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
            ]
        );
        $users = User::create($validated);
        Auth::login($users);
        return redirect()->route("tests.index");
    }
    public function login(Request $request){
        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required|string"
        ]);
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route("tests.index");
        };
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("login.show");
    }
}

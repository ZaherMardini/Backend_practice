<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rules\Password;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class registerUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
            $info = $request->validate([
                'name' => ['required', 'min:3', 'unique:users,name'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'confirmed', Password::min(5)]
            ]);
            //create user
            $user = User::create($info);
            //register
            @Auth::login($user);
            //redirect
            return redirect('/jobs');
        //validation
    }
}

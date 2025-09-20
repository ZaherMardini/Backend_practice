<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(Request $request){
       //validate
    $info = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'password' => ['required']
            ]
            );
       //attempt
       if(!Auth::attempt($info)){
            throw ValidationException::withMessages(['password' => 'erorr username or pw']);
       };
       //session token
       request()->session()->regenerate();
       //redirect
       return redirect('/jobs');
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}

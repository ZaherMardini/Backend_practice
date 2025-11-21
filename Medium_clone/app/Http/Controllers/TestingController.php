<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function test(){

        $u = User::find(2);
        $f = User::find(3);
        return view('testing.followers', ['user' => $u, 'toFollow' => $f]);
    }
}

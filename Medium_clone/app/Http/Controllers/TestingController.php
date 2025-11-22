<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function test(){

        $first = User::find(1);
        $second = User::find(3);
        return view('testing.post-testing', ['first' => $first, 'second' => $second]);
    }
}

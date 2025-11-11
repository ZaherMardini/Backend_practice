<?php

namespace App\Http\Controllers;
use App\Models\Tag;

use Illuminate\Http\Request;

class tagController extends Controller
{
    public function __invoke(Tag $tag){
        // dd($tag->jobs);
       return view('results',['jobs' => $tag->jobs]);
    }
}

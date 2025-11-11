<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class jobController extends Controller
{
    public function index(){
        $jobs = Job::latest()->with(['employer','tags'])->get()->groupBy('featured');
        return view('jobs.index',[
        'jobs' => $jobs[0],
        'Fjobs' => $jobs[1],
        'tags'=> Tag::all()
    ]);
    }
}

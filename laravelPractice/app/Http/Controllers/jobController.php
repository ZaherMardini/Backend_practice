<?php

namespace App\Http\Controllers;

use App\Models\present_job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\Authorizable;


class jobController extends Controller
{
    public function index(){
        $jobs = present_job::with('employer')->latest()->simplePaginate(5);
        return view('jobs.index', ['jobs' => $jobs]);
    }
    public function store(){
        $info = request()->all();
        present_job::create([
        'title' => $info['title'],
        'employer_id' => 1,
        'salary' => $info['salary']
        ]);
        return redirect('/jobs');
    }
    public function edit(present_job $job){ //entry point for edit
        // if(Auth::guest()){
        //     return redirect('/login');
        // }
        // Gate::authorize('edit-job', $job);
        // if($job->employer->user->isNot(Auth::user())){//basic
        //     abort('403');
        // };
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(present_job $job){
        $job->update(['title' => request()->get('title'), 'salary' => request()->get('salary')]);
        return redirect('/jobs');
    }
    public function show(present_job $job){
        return view('jobs.show', ['job' => $job]);
    }
    public function destroy(present_job $job){
        Gate::authorize('edit-job', [$job,Auth::user()]);
        // if(Auth::guest()){
        //     return redirect('/login');
        // }
        //Auth::user() == Authenticated user == current user
        $job->delete();
        return redirect('/jobs');
    }
}
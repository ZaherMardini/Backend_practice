<?php
use App\Models\present_job;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::get('/about', fn() => view('about'));

Route::get('/contact', fn() => view('contact'));

Route::get('/jobs', function(){
    $jobs = present_job::with('employer')->latest()->simplePaginate(5);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', fn()=> view('jobs.create'));

Route::post('/jobs/create', function(){
    // $info = request()->validate(
    //     [
    //         'title' => ['required' ,'string'],
    //         'salary' => ['required', 'string']
    //         ]
    //     );
    //...Validated data
    //dd($info);
    $info = request()->all();
    present_job::create([
    'title' => $info['title'],
    'employer_id' => 1,
    'salary' => $info['salary']
    ]);
    return redirect('/jobs');
}
);

Route::get('/jobs/{id}/edit', function($id){
    $job = present_job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{id}', function($id){
    $job = present_job::find($id);
    $job->update(['title' => request()->get('title'), 'salary' => request()->get('salary')]);
    return redirect('/jobs');
});

Route::delete('/jobs/{id}', function($id){
    present_job::findOrFail($id)->delete();
    return redirect('/jobs');
});

Route::get('/jobs/{id}', function($id){
    $job = present_job::find($id);
    return view('jobs.show', ['job' => $job]);
});


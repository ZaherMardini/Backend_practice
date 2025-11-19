<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $posts = Post::latest()->simplePaginate(5);
        // $posts = Post::;
        // dd($posts);
        return view('posts.index', ['posts' => $posts, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $c = Category::get();
        return view('posts.create', ['categories' => $c]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $info = $request->validated();// whatch out for the request type
        if($request->hasFile('file')){
            $img = $request->file('file');
            $imgname = Str::uuid() . '.' . $img->getClientOriginalExtension();
            $path = $img->storeAs('images', $imgname, 'public');
            $info['slug'] = Str::slug($request->title);
            $info['Image'] = $path;
            // dd($info);
            unset($info['file']);// This fucking line cost me 3 hours of crying, this resolves the bug in line 51
            $info['user_id'] = Auth::user()->id;
            // dd($info);
            Post::create($info);// it tries to take the 'file' key instead of the image path
            return redirect()->route('dashboard')->with('success', 'Post created successfully!');
        }else{
            dd('image fucked');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

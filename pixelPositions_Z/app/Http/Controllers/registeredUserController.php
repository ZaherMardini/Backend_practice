<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class registeredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $userInfo = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);
        
        $employerInfo = $request->validate([
            'name' => ['required', 'string'],
            'logo' => [File::types(['jpg', 'png', 'webp','svg'])]
        ]);
        
        $user = User::create($userInfo);
        $logoPath = $request->file(key: 'emplogo')->store(path: 'employerLogo');
        $employerInfo['url'] = $logoPath;
        $user->employers()->create(['name'=> $request->name, 'logo'=> $logoPath]);
        Auth::login($user);
        return redirect('/');
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

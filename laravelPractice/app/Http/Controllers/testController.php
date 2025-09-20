<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nigga;
use App\Models\Bunker;
use Illuminate\Auth\Events\Validated;

class testController extends Controller
{
    public function index(){
        $people = Nigga::with('Bunker')->orderBy("created_at", "desc")->get();
        return view("testView.indexView", ["test" => $people]);
    }
    
    public function show($id){
        $person = Nigga::with('Bunker')->find($id);
        return view("nigga_id", ["Key_person" => $person]);
    }

    public function create(){
        $bunkers = Bunker::all();
        return view("create", ["key_bunkers" => $bunkers]);
    }

    public function store(Request $request){
        $validated = $request->validate(
     [
            "name" => "required|string|min:3|max:15",
            "skill" => "required|integer|min:0|max:100",
            "bio" => "string|min:3|max:15",
            "bunker_id" => "required|integer|exists:bunkers,id"//bunker id exists in the bunker table id column
            ]
        );
        Nigga::create($validated);
        return redirect()->route("tests.index");
    }

    public function destroy($id){
        $wantedNigga = Nigga::findOrFail($id);
        $wantedNigga->delete();
        return redirect()->route("tests.index");
    }
}

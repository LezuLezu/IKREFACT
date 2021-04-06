<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $owners = \App\Models\User::all();
        return view('owner.index', ['owners' => $owners]);
    }

    public function show($id){
        $owner = \App\Models\User::find($id);
        return view('owner.show', ['owners' => $owner]);
    }

    public function animals($id){
        $animals = \App\Models\User::find($id)->myAnimals;
        return view('animal.index', ['animals' => $animals]);
    }
}

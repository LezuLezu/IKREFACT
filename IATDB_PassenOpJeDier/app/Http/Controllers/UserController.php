<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Pet owner functions
    public function ownerIndex(){
        $owners = \App\Models\User::all()->where('role', 'Baasje');
        return view('owner.index', ['owners' => $owners]);
    }

    public function ownerShow($id){
        $owners = \App\Models\User::find($id);
        return view('owner.show', ['owners' => $owners]);
    }

    public function ownerAnimals($id){
        $animals = \App\Models\User::find($id)->myAnimals;
        return view('animal.index', ['animals' => $animals]);
    }

    // Sitter functions
    public function sitterIndex(){
        $sitters = \App\Models\User::all()->where('role', 'Oppasser');
        return view('sitter.index', ['sitters' => $sitters]);
    }
    public function sitterShow($id){
        $sitters = \App\Models\User::find($id);
        return view('sitter.show', ['sitters' => $sitters]);
    }
}

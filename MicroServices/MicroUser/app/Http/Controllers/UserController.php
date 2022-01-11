<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class UserController extends Controller
{

    public function index($role){
        $persons = \App\Models\User::all()->where('role', $role);
        return $persons;
    }

    public function ownerIndex(){
        return view('owner.index', ['owners' => $this->index('Baasje')]);
    }


    public function ownerShow($id){
        $owners = \App\Models\User::find($id);
        return view('owner.show', ['owners' => $owners]);
    }

    public function ownerAnimals($id){
        $animals = \App\Models\User::find($id)->myAnimals;
        return view('animal.ownerIndex', ['animals' => $animals]);
    }

    public function sitterIndex(){
        return view('sitter.index', ['sitters' => $this->index('Oppasser')]);
    }

    public function sitterShow($id){
        $sitters = \App\Models\User::find($id);
        $reviews = \App\Models\Review::all()->where('id', $id);
        return view('sitter.show', [
            'sitters' => $sitters,
            'reviews' => $reviews,
            ]);
    }

}

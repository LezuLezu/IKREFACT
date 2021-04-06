<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        // return \App\Models\Animal::all();
        $animals = \App\Models\Animal::all();
        return view('animal.index', ['animals' => $animals]);
    }

    public function show($id){
        $animal = \App\Models\Animal::find($id);
        return view('animal.show', ['animals' => $animal]);
    }

    public function owner($id){
        $owners = \App\Models\Animal::find($id)->myOwner;
        return view('owner.show', ['owners' => $owners]);
    }

}

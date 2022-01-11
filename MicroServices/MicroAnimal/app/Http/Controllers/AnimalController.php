<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;

class AnimalController extends Controller
{
    public function animalIndex(){
        $animals = \App\Models\Animal::all();
        return view('animal.index', ['animals' => $animals]);
    }
    public function animalShow($id){
        $animal = \App\Models\Animal::find($id);
        return view('animal.show', ['animals' => $animal]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        // return \App\Models\Animal::all();
        return view('animal.index', ['animals' => \App\Models\Animal::all()]);
    }
}

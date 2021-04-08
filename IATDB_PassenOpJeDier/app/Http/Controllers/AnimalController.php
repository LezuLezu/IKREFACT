<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
use Auth;

class AnimalController extends Controller
{
        // show all pets
    public function index(){
        // return \App\Models\Animal::all();
        $animals = \App\Models\Animal::all();
        return view('animal.index', ['animals' => $animals]);
    }
        // show pet
    public function show($id){
        $animal = \App\Models\Animal::find($id);
        return view('animal.show', ['animals' => $animal]);
    }
        // show owner of the pet
    public function owner($id){
        $owners = \App\Models\Animal::find($id)->myOwner;
        return view('owner.show', ['owners' => $owners]);
    }
    // create new pet profile
    public function create(){
        return view('new.pet.create', [
            'kind_of_animal' => \App\Models\KindOfAnimal::all(),
            'images' => \App\Models\Images::all()
        ]);
    }
    public function store(Request $request, \App\Models\Animal $animal, \App\Models\User $user){
        // fetch owner/user info
        $user = Auth::user();
        $userImage = $request->input('imageHome');
        $userDes = $request->input('descriptionOwner');
        // fetch pet info
        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->age = $request->input('age');
        $animal->breed = $request->input('breed');
        $animal->image = $request->input('imagePet');
        $animal->owner = $user->id;
        $animal->description = $request->input('descriptionPet');

        try{
            $animal->save();
            DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'image' => $userImage,
                        'description' => $userDes,
                        'role' => "Baasje"
                    ]);
            return redirect('/animals');
        }catch(Exception $e){
            return redirect('/createpet');
        }
    }
}

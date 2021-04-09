<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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

    // Create new sitter
    public function create(){
        return view('new.sitter.create', [
            'images' => \App\Models\Images::all()
        ]);
    }
    public function store(Request $request, \App\Models\User $user){
        $user = Auth::user();
        $userImage = $request->input('imageHome');
        $userDes = $request->input('description');
        try{
            DB::table('users')
                    ->where('id', $user->id)->where('role', '<>', 'Admin')
                    ->update([
                        'image' => $userImage,
                        'description' => $userDes,
                        'role' => 'Oppasser'
                    ]);
            return redirect('/sitters');
        }catch(Exception $e){
            return redirect('/createsitter');
        }
    }

    // create application
    public function createApplication(){
        $animal = \App\Models\Animal::all();
        return view('sitter.create', ['animals' => $animal]);
    }

    public function storeApplication(Request $request, \App\Models\Animal $animal, \App\Models\User $user){
        $user = Auth::user();
        $petname = $request->input('namePet');
        // return $petname;
        try{
            DB::table('animal')
                    ->where('name', $petname)
                    ->update([
                        'sitter'=> $user->id,
                        ]);
            return redirect('/animals');
        }catch(Exception $e){
            return redirect('/createsitter');
        }
    }
    public function createAccept($id, \App\Models\Animal $animalMod, \App\Models\User $userMod){
        $animal = $animalMod::find($id);
        $sitterId = $animal->sitter;
        $sitter = $userMod::find($sitterId);
        // return $sitterId;
        if($sitterId == NULL){
            $user = Auth::user()->id;
            return $this->ownerAnimals($user);
        }else{
            return view('owner.accept', [
                'animal' => $animal,
                'sitter' => $sitter
            ]);
        }        
    }
    public function updateAccept(Request $request, \App\Models\Animal $animalMod, \App\Models\User $userMod){
        switch($request->input('action')){
            case 'accept':
                return "gelukt";
                break;
            case 'refuse':
                $uri = $_SERVER['REQUEST_URI'];
                $id = intval(substr($uri, -1));
                // return gettype($id);
                $animal = $animalMod::find($id);
                try{
                    DB::table('animal')
                    ->where('name', $animal->name)
                    ->update([
                        'sitter'=> NULL,
                        ]);
                    $user = Auth::user()->id;
                    return $this->ownerAnimals($user);
                }catch(Exception $e){
                    return redirect('/application/{{$animal->id}}');
                }      
                break;
        }
        
    }

}

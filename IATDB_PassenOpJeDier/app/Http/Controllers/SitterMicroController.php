<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SitterMicroController extends Controller
{

    public function animalShow($id){
        $animal = \App\Models\Animal::find($id);
        return view('micro.animal.show', ['animals' => $animal]);
    }
    public function animalIndex(){
        $animals = \App\Models\Animal::all();
        return view('micro.animal.index', ['animals' => $animals]);
    }

    // create application
    public function createApplication(){
        $animal = \App\Models\Animal::all();
        return view('micro.sitter.create', ['animals' => $animal]);
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
            return redirect('/micro/animals');
        }catch(Exception $e){
            return redirect('/micro/createsitter');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function createBlock(){
        $users = \App\Models\User::all()->where('role', '<>', 'Admin');
        return view('admin.create--block', [
            'users' => $users
        ]);
        
    }
    public function updateBlock(Request $request, \App\Models\User $user){
       $name = $request->input('name');
       $time = Carbon::now('Europe/Amsterdam')->toTimeString();
       $date = $request->input('endDate') . ' ' . $time;
    //    return Carbon::now('Europe/Amsterdam');
    //    return $date;
       try{
           DB::table('users')
                ->where('name', $name)
                ->update(['banned_until' => $date]);
            return redirect('/admin');
       }catch(Exception $e){
           return redirect('/admin/create--block');
       }
    }

    public function createDeblock(){
        $users = \App\Models\User::all()->where('role', '<>', 'Admin');
        return view('admin.create--deblock', [
            'users' => $users
        ]);        
    }

    public function updateDeblock(Request $request, \App\Models\User $user){
       $name = $request->input('name');
       try{
           DB::table('users')
                ->where('name', $name)
                ->update(['banned_until' => NULL]);
            return redirect('/admin');
       }catch(Exception $e){
           return redirect('/admin/create--deblock');
       }
    }

    // Delete pet applications
    public function deletePet(){
        $animals = \App\Models\Animal::all();
        return view('admin.remove--pet', [
            'animals' => $animals
        ]);
    }
    public function destroyPet(Request $request, \App\Models\Animal $animal){
        $petname = $request->input('name');
        try{
            DB::table('animal')
                    ->where('name', $petname)
                    ->delete();
            return redirect('/admin');
        }catch(Exception $e){
            return redirect('/admin/remove--pet');
        }
    }
    // Delete users
    public function deleteUser(){
        $users = \App\Models\User::all()->where('role', '<>', 'Admin');
        return view('admin.remove--user', [
            'users' => $users
        ]);
    }
    public function destroyUser(Request $request, \App\Models\User $user){
        $username = $request->input('name');
        try{
            DB::table('users')
                    ->where('name', $username)
                    ->delete();
            return redirect('/admin');
        }catch(Exception $e){
            return redirect('/admin/remove--user');
        }
    }

}

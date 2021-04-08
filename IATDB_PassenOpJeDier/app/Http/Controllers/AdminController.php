<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use DB;

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
       $date = $request->input('endDate');
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

}

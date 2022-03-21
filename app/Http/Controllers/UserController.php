<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function listUsers() {

        $users = User::all();
    
        return view('applications.registered',['users' => $users]);
    }

    public function createUser() {

        $users = User::all();
    
            return view('applications.newuser', ['users' => $users]);
    }

    public function store(Request $request) {

        $user = new User;
    
        $user->created_at = "now";
        $user->updated_at = "now";
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->save();
        
        return redirect('/applications/listUsers')->with('msg', 'User has been added!');
    
    }
}

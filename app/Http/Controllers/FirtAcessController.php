<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FirtAcessController extends Controller
{
    public function store(Request $request) {

        $user = new User;
    
        $user->created_at = "now";
        $user->updated_at = "now";
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->save();
        
        return redirect('/')->with('msg', 'User has been added!');
    
    }
}

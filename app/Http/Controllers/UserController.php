<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user;
    public function create(){
        return view('admin.user.create');
    }
    public function newUser(Request $request){
        $this->user = new User();
        $this->user->name = $request->user_name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->save();
        return redirect()->back()->with('success','user created successfully');

    }
}

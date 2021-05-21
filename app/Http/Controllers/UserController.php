<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index() {
        $usersList = User::all();
        if($usersList == "" or $usersList == null){
            return view('backend/user.create');
        }else{
            return view('backend/user.index', ['usersList'=>$usersList]);
        }
    }

    public function show($id) {
        $user = User::find($id);
        if ($user != null) {
            $usersList[0] = $user;
        } else {
            $usersList = null;
        }
        return view('backend.user.show', ['user'=>$user]);
    }

    public function create() {
        return view('backend.user.form');
    }

    public function store(Request $r) {
        $user = new User();
        
        $user->name = $r->name;
        $user->email = $r->email;
        $user->password = Hash::make($r->password);
        $user->type = $r->type;
        $user->save();
        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('backend.user.form', array('user' => $user));
    }

    public function update(Request $r) {
        $user = User::find($r->id);

        $user->name = $r->name;
        $user->email = $r->email;
        if ($r->password != "") {
            $user->password = Hash::make($r->password);
        }
        $user->type = $r->type;
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function getInfo($id){
        $user = User::find($id);
        return response()->json(['user' => $user]);
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('id','desc')->get();
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request){

        $data = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make( $request->input('password')),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone')
        ];
        // dd($request->all());
        User::create($data);

        return redirect()->route('user.index');
    }
}

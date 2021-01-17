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

    public function show($id)
    {
        $user = User::findOrfail($id);
        // dd($user);
        return view('users.show',compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first(); // single data we use first
        // dd($user);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $user = User::find($id);
        // dd($user);
        $data = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone')
        ];

        $user->update($data);

        return redirect()->route("user.show", $id);
    }

    public function delete($id)
    {
        $user = User::find($id);
        // dd($user);
        $user->delete();

        return redirect()->back();
    }
}

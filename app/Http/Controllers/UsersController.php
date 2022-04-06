<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', ['users'=>$users]);
    }


    public function create(){
        return view('registra');
    }

    public function store(Request $request){
        $user = $request->all();
        $user['password']=Hash::make($request['password']);
        $user['rol'] = 'user';

        User::create($user);

        return redirect('/login');
    }

    public function checkUser(){
        return view('login');
    }

    public function credential(Request $request){
        $credentials=$request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/index');
        }
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function edit(User $user){
        return view('users.editUser')->with
        (['user'=>$user]);
    }

    public function update(Request $request){
        $user =Auth::user();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->save();
        return redirect('/index');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('/index');
    }

}

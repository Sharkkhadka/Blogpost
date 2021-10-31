<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function registerView(){
        return view('user.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // dd($request);
        // dd(Hash::make($request->password));
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function loginView(){
        return view('user.login');
    }

    public function login(Request $request){
        $validated = $request->validate([
            // 'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (Auth::attempt([
            // "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
        ])) {
            $request->session()->regenerate();

            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'Password do not match.',
        ]);
    }

}

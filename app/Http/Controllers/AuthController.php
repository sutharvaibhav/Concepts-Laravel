<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerStore(Request $request){
        $validated = $request->validate([
            'role' => 'required|in:admin,user',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        User::create($validated);
        return redirect()->route('login');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginStore(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            ]);
        $user = User::where('email', $request->email)->first();
        if(Auth::attempt($validated)){
            Auth::login($user);
            return redirect()->route('dashboard');

        }else{
            return redirect()->back()->with('error', 'Invalid credentials!');
        }
    }

}

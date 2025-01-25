<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $user = auth()->user();
        if($user && $user->role == 'admin'){
            return redirect()->route('admin.dashboard');
        }
        else if($user && $user->role == 'user'){
            return redirect()->route('user.dashboard');
        }
        else{
            return redirect()->route('login')->with('error','You\'re not authorized to access the page!');
        }
    }

    public function dashboardAdmin(){  
        return view('admin-dashboard');      
    }

    public function dashboardUser(){     
        return view('user-dashboard');                 
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login')->with('success','You\'ve been logged out!');
    }
}

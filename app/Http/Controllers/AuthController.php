<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){

        if(Auth::check()){
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    public function register(){

        if(Auth::check()){
            return redirect()->route('home');
        }

        return view('auth.register');
    }

    public function loginStore(Request $request){

        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        if(Auth::attempt($validation)){
            $request->session()->regenerate();

            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }

    public function registerStore(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $hashPassword = Hash::make($request->password);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashPassword,
        ]);

        return redirect(url('/login'));
    }

    public function logout(){

        Auth::logout();

        return redirect(url('/login'));
    }
}

<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //showLoginForm
    public function showLoginForm()
    {
        // dd(Hash::make('password'));
        return view('login');
    }
    //showRegisterForm
    public function showRegisterForm()
    {
        return view('register');
    }
    //submitRegisterForm
    public function submitRegisterForm(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:4'],
        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        Auth::login($user);
        return redirect('/home')->with('success', 'Account created successfully');
    }
    //login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])){
            return redirect('/home');
        }

        return back()->with('error', 'Email or password is incorrect');
        
    }
    //logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    //showProfilePage
    // public function showProfilePage($username)
    // {
    //     $userData = Auth::user(); 
    //     $users = User::where('id', '!=', Auth::user()->id)->get();
    //     $profile = User::where('username', $username)->first();
    //     return view('profile', compact('profile','userData', 'users'));
    // }
   
}

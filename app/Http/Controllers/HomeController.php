<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    public function showHomePage()
    {
        $userData = Auth::user(); 
        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('home', compact('userData', 'users'));
    }
    //showProfilePage
    public function showProfilePage($username)
    {
        $userData = Auth::user(); 
        $users = User::where('id', '!=', Auth::user()->id)->get();
        $profile = User::where('username', $username)->firstOrFail();
        return view('profile', compact('profile','userData', 'users'));
    }
    //Search
    public function Search(Request $request)
    {
        // dd($request);
        $searchValue = $request->validate([
            'search' => 'required|string|max:255',
        ]);
        $search = $searchValue['search'];
        $users = User::where('username', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%')->get();
        return response()->json($users);
        return view('search', compact('users'));
    }
    //showAccountPage
    public function showAccountPage()
    {
        $auth = Auth::user();
        return view('account', compact('auth'));
    }
    //updateAccount
    public function updateAccount(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:4'],
        ]);
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect('/home')->with('success', 'Account updated successfully');
    }
}

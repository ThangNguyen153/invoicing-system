<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'dashboard'
        ]);
    }

    public function home()
    {
        if(Auth::check())
        {
            return redirect()->route('dashboard');
        }
        return view('home');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }
        return back()->withErrors([
            'name' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('name');
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect()->route('home')
            ->withErrors([
                'name' => 'Please login to access the dashboard.',
            ])->onlyInput('name');
    }
}

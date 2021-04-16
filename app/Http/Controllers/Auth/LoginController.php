<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // you can't login when you're logged in already
    public function __construct()
    {
        $this->middleware('guest');
    } 

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'email' => 'required|email', 
            'password' => 'required',
        ]);

        
        // sign the user in
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', "Invalid login details");
        }

        // redirect
        return redirect()->route('dashboard');
    }
}

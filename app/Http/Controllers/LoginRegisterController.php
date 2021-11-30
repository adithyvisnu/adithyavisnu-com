<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    //
    public function register(Request $request)
    {
        # code...
        print_r('Register');
        print_r($request->all());
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|unique:users|max:100',
            'password' => 'required'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        // print_r($validated);
        // dd('asam garam kehidupan!!');
        User::create($validated);
        return redirect('auth');
    }

    public function login(Request $request)
    {
        # code...
        print_r('Login');
        print_r($request->all());

        $validated = $request->validate([
            'email' => 'required|max:100',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('/stocks');
        }

        return back()->withInput();
    }

    public function logout(Request $request)
    {
        # code...
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }
}

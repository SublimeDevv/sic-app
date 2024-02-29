<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:30', 'unique:users'],
            'email' => 'required|email|unique:users|max:60',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password'
        ]);

        User::create([
            'name' => Str::lower($request->name),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password

        // ]);

        // Otro forma de autenticar, aunque las dos son correctas

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('posts.index', auth()->user()->name);
    }

}

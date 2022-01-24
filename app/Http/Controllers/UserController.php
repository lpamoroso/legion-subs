<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show_profile()
    {
        return view('user.perfil');
    }

    public function show_criticas()
    {
        return view('user.criticas');
    }

    public function edit_profile(Request $request)
    {
        if (! Hash::check($request->input('password'), Auth::user()->password)) {
            return back()->withErrors([
                'password' => ['La contraseña es incorrecta.']
            ]);
        }

        $user = User::find(Auth::id());

        $user->name = $request->input('name');
        $user->email = hash('sha256', $request->input('email'));
        $user->save();

        return redirect()->route('show_profile');
    }

    public function edit_password(Request $request)
    {
        if (
                (! Hash::check($request->input('current_password'), Auth::user()->password)) &&
                (strcmp($request->input('new_password'), $request->input('confirmation_password')))
        ) {
            return back()->withErrors([
                'password_error' => ['Alguna contraseña es incorrecta.']
            ]);
        }

        $user = User::find(Auth::id());

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        Auth::logout();

        return redirect()->route('root');
    }
}

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
}

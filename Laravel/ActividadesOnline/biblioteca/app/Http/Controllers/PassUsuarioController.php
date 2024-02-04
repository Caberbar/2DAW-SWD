<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PassUsuario;
use Illuminate\Support\Facades\Session;

class PassUsuarioController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = PassUsuario::where('nombreusu', $request->nombreusu)->first();

        if ($user && $request->password === $user->password) {
            Session::put('user', $user);

            return redirect()->route('autores.index');
        }

        return back()->withErrors([
            'nombreusu' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function logout()
    {
        Session::forget('user');

        return view('login');
    }
}
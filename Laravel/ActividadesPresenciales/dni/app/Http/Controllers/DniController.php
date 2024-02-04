<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DniController extends Controller
{
    public function index()
    {
        return view('CalculadoraDni');
    }

    public function calculate(Request $request)
    {
        $dni = $request->input('dni');

        if (!is_numeric($dni) || strlen($dni) !== 8) {
            return redirect('/CalculadoraDni')->with('error', 'DNI invalido, introduce un numero de 8 cifras.');
        }

        $letters = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letterIndex = $dni % 23;
        $letter = $letters[$letterIndex];

        return redirect('/CalculadoraDni')->with('result', "La letra de $dni es $letter");
    }
}

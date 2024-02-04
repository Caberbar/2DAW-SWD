<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaizCuadradaController extends Controller
{
    public function index()
    {
        return view('raizCuadrada');
    }

    public function calculate(Request $request)
    {
        $number = $request->input('number');

        if ($number < 0) {
            return redirect('/raizCuadradaResult')->with('error', 'No se puedes calcular números negativos.');
        }

        $result = sqrt($number);

        return redirect('/raizCuadradaResult')->with('result', $result);
    }
}

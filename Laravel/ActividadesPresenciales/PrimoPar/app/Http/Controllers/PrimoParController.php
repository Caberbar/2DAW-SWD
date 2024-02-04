<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimoParController extends Controller
{
    public function index()
    {
        return view('PrimoParResult');
    }

    public function calcular(Request $request)
    {
        $number = $request->input('number');

        if (!is_numeric($number) || $number <= 0) {
            return redirect('/PrimoParResult')->with('error', 'Numero invalido.');
        }

        $esPrimo = $this->esPrime($number);
        if ($number % 2 == 0) {
            $esPar = 'par';
        } else {
            $esPar = 'impar';
        }

        return redirect('/PrimoParResult')->with('result', "$number is " . ($esPrimo ? 'primo' : 'no primo') . " y $esPar.");
    }

    private function esPrime($number)
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');

        $result = 0;

        switch ($operation) {
            case 'suma':
                $result = $num1 + $num2;
                break;

            case 'resta':
                $result = $num1 - $num2;
                break;

            case 'multiplicacion':
                $result = $num1 * $num2;
                break;

            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    return redirect('/')->with('error', 'No se puede dividir entre 0');
                }
                break;

            default:
                return redirect('/')->with('error', 'Operación no valida.');
        }

        return redirect('/')->with('result', $result);
    }
}
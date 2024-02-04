<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IvaController extends Controller
{
    public function index()
    {
        return view('CalculadoraIva');
    }

    public function calculate(Request $request)
    {
        $price = $request->input('price');

        if (!is_numeric($price) || $price <= 0) {
            return redirect('/CalculadoraIva')->with('error', 'Precio Invalido.');
        }

        $vat = $price * 0.21;
        $total = $price + $vat;

        return redirect('/CalculadoraIva')->with('result', "21% de $price es $vat. Precio total: $total");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Libro;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alquileres = Alquiler::all();
        return view('alquileres.index', compact('alquileres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $libros = Libro::all();
        $usuarios = Usuario::all();
        return view('alquileres.create', compact('libros', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libro_id' => 'required',
            'usuario_id' => 'required',
            'fechprestamo' => 'required|date|before:fechdevolucion',
            'fechdevolucion' => 'required|date|after:fechprestamo',
        ]);

        Alquiler::create($request->all());

        return redirect()->route('alquileres.index')->with('success', 'Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alquiler $alquiler)
    {
        return view('alquileres.show', compact('alquiler'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alquiler = Alquiler::findOrFail($id);
        $libros = Libro::all();
        $usuarios = Usuario::all();
        return view('alquileres.edit', compact('alquiler',  'libros', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'libro_id' => 'required',
            'usuario_id' => 'required',
            'fechprestamo' => 'required|date|before:fechdevolucion',
            'fechdevolucion' => 'required|date|after:fechprestamo',
        ]);

        $alquiler = Alquiler::findOrFail($id);
        $alquiler->update($request->all());

        return redirect()->route('alquileres.index')->with('success', 'Alquiler actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alquiler = Alquiler::find($id);
        //info('Destroy method called. Autor ID is: ' . $autor->id);
        //dd($autor);
        //dd($autor->id);
        if ($alquiler) {
            //$libro->alquileres()->delete();
            $alquiler->delete();
            return redirect()->route('alquileres.index');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Models\Autor;


class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores = Autor::all();

        return view('libros.create', compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|min:3',
            'categoria' => 'required|string|min:3',
            'autor_id' => 'required',
            'descripcion' => 'required|string|min:3',
            'precio' => 'required|numeric|min:1',
        ]);

        Libro::create($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        $autores = Autor::all(); 
        return view('libros.edit', compact('libro', 'autores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|min:3',
            'categoria' => 'required|string|min:3',
            'autor_id' => 'required',
            'descripcion' => 'required|string|min:3',
            'precio' => 'required|numeric|min:1',
        ]);

        $libro = Libro::find($id);
        $libro->update($request->all());

        return redirect()->route('libros.index')->with('success', 'Libro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        //info('Destroy method called. Autor ID is: ' . $autor->id);
        //dd($autor);
        //dd($autor->id);
        if ($libro) {
            //$libro->alquileres()->delete();
            $libro->delete();
            return redirect()->route('libros.index');
        }
    }
}

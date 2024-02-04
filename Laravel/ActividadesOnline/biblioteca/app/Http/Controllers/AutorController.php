<?php

namespace App\Http\Controllers;

use App\Models\Autor; 
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::all();
        return view('autores.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'apellidos' => 'required|min:3',
            'nombre' => 'required|min:3',
            'nacionalidad' => 'required|min:3',
            'sexo' => 'required|in:F,M',
            'edad' => 'required|numeric|min:18',
        ]);

        Autor::create($request->all());

        return redirect()->route('autores.index')->with('success', 'Autor creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        return view('autores.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'apellidos' => 'required|min:3',
            'nombre' => 'required|min:3',
            'nacionalidad' => 'required|min:3',
            'sexo' => 'required|in:F,M',
            'edad' => 'required|numeric|min:18',
        ]);

        $autor = Autor::findOrFail($id);
        $autor->update([
            'apellidos' => $request->input('apellidos'),
            'nombre' => $request->input('nombre'),
            'nacionalidad' => $request->input('nacionalidad'),
            'sexo' => $request->input('sexo'),
            'edad' => $request->input('edad'),
        ]);

        return redirect()->route('autores.index')->with('success', 'Autor actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $autor = Autor::find($id);
        //info('Destroy method called. Autor ID is: ' . $autor->id);
        //dd($autor);
        //dd($autor->id);
        if ($autor) {
            $autor->libros()->delete();
            $autor->delete();
            return redirect()->route('autores.index');
        }
    }
}

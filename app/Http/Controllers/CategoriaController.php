<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;  // Importa el modelo correctamente

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:225',
        ]);

        // Aquí falta crear la categoria, asumo que quieres crearla
        Categoria::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoría creada correctamente');
    }

    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada correctamente');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada correctamente');
    }
}

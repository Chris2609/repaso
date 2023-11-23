<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;

class PruebasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pruebas = Prueba::all();

        return view('vistaPruebas', ['pruebas' => $pruebas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $prueba = new Prueba;

        $prueba->nombre = 'Casimiro';

        $prueba->save();

        return redirect('ver');

        /*con create
        $flight = Flight::create([
            'name' => 'London to Paris',
        ]);
        
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(Prueba $prueba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prueba $prueba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prueba $prueba)
    {
        $prueba->id = 5;
        $prueba->nombre = "Hemirado";

        Prueba::where('id', $prueba->id)->update(['nombre' => $prueba->nombre]);

        return redirect('ver');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Prueba $prueba)
    {
        // $idEliminar = $request->id;
        $idEliminar = 3;
        Prueba::where('id', $idEliminar)->delete();

        return redirect('ver');
    }
}

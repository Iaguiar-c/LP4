<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use Illuminate\Http\Request;

class ComputadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return View('computador.index')->with('ComputadorCollection', Computador::all()); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('computador.create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect('/computadores');//
    }

    /**
     * Display the specified resource.
     */
    public function show(Computador $computadore)
    {
        return View('computador.show')->with('objetoComputador',$computadore);//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computador $computadore)
    {
       return View('computador.edit')->with('objetoComputador',$computadore); //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computador $computadore)
    {
        $computadore->update($request->all() );
        return redirect('/computadores');//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computador $computador)
    {
        $computadore->delete();
        return redirect('/computadores');//
    }
}

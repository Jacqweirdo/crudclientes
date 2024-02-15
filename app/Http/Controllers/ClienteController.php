<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view ('cliente.index',compact('clientes'));
        //
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
        $clientes=new Cliente;
        $clientes->Nombre=$request->input('Nombre');
        $clientes->Telefono=$request->input('Telefono');
        $clientes->Correo=$request->input('Correo');
        $clientes->save();
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Id)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$Id)
    {
        $clientes=Cliente::find($Id);
        $clientes->Nombre=$request->input('Nombre');
        $clientes->Telefono=$request->input('Telefono');
        $clientes->Correo=$request->input('Correo');
        $clientes->update();
        return redirect()->back();

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Id)
    {
        $clientes=Cliente::find($Id);
        $clientes->delete();
        return redirect()->back();
        //
    }
}

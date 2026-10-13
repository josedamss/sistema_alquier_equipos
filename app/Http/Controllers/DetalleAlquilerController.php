<?php

namespace App\Http\Controllers;

use App\Models\Detalle_Alquiler;
use Illuminate\Http\Request;

class DetalleAlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalles_alquiler = Detalle_Alquiler::all();
        dd($detalles_alquiler);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Detalle_Alquiler $detalle_Alquiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalle_Alquiler $detalle_Alquiler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalle_Alquiler $detalle_Alquiler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalle_Alquiler $detalle_Alquiler)
    {
        //
    }
}

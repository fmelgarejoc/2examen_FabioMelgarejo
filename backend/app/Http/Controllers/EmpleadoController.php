<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleado =Empleado::all();
        return response()->json($empleado);
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
         $empleado =Empleado::create($request->all());

        return response()->json($empleado,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado =Empleado::findOrFail($id);
        return response()->json($empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleado =Empleado::findOrFail($id);
        $empleado =Empleado::update($request->all());
        return response()->json($empleado,201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

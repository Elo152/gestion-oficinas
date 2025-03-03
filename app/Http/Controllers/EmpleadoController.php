<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficina;
use Illuminate\Http\Request;

class EmpleadoController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $oficina = Oficina::findOrFail($id);
        $empleados = $oficina->empleados;
        return view('empleados/index', compact('empleados', 'oficina'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $oficina = Oficina::findOrFail($id);
        return view('empleados/create', compact('oficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'oficina_id' => 'required|exists:oficinas,id',
            'nombre' => 'required',
            'apellido1' => 'required',
            'fecha_nacimiento' => 'required|date',
            'dni' => 'required|unique:empleados,dni',
            'email' => 'required|email|unique:empleados,email'
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados', ['id' => $request->oficina_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}

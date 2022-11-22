<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiciosModel;
use App\Models\CentroModel;
use App\Models\EmpleadosModel;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $servicios = ServiciosModel::all();
        return $servicios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $centros = CentroModel::all();
        // $empleados = EmpleadosModel::all();
        // return view('servicios.create')->with('centros', $centros)->with('empleados', $empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $servicio = new ServiciosModel();
        $servicio->nombre_servicio = $request->nombre;
        $servicio->descripcion_servicio = $request->descripcion;
        $servicio->tiempo_servicio = $request->tiempo;
        $servicio->precio_servicio = $request->precio;
        $servicio->id_centro = $request->centro;
        $servicio->id_empleado = $request->empleado;
        $servicio->save();

        $servicios = ServiciosModel::all();
        return $servicios;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $servicios = ServiciosModel::find($id);
        return $servicios;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $centros = CentroModel::all();
        // $empleados = EmpleadosModel::all();
        // return view('servicios.edit')->with('centros', $centros)->with('empleados', $empleados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $servicio = ServiciosModel::find($id);
        $servicio->nombre_servicio = $request->nombre;
        $servicio->descripcion_servicio = $request->descripcion;
        $servicio->tiempo_servicio = $request->tiempo;
        $servicio->precio_servicio = $request->precio;
        $servicio->id_centro = $request->centro;
        $servicio->id_empleado = $request->empleado;
        $servicio->save();

        $servicios = ServiciosModel::all();
        return $servicios;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $servicio = ServiciosModel::find($id);
        $servicio->delete();
        
        $servicios = ServiciosModel::all();
        return $servicios;
    }
}

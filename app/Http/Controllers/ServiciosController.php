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
        return view('general', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crearServicios');
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
        $servicio->nombre_servicio = $request->nombre_servicio;
        $servicio->descripcion_servicio = $request->descripcion_servicio;
        $servicio->tiempo_servicio = $request->tiempo_servicio;
        $servicio->precio_servicio = $request->precio_servicio;
        $servicio->id_centro = $request->id_centro;
        $servicio->id_empleado = $request->id_empleado;
        $servicio->save();
        $servicios = ServiciosModel::all();
        return view('general', compact('servicios'));
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
        return view('general', compact('servicios'));
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
        $centros = CentroModel::all();
        $empleados = EmpleadosModel::all();
        return view('editarServicios')->with('centros', $centros)->with('empleados', $empleados);
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
        return view('general', compact('servicios'));

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
        return view('general', compact('servicios'));
    }
}

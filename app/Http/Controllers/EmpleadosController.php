<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadosModel;
use App\Models\CargoModel;
use App\Models\CentroModel;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = EmpleadosModel::all();
        $cargos = CargoModel::all();
        $centros = CentroModel::all();
        return view("admin.empleados", compact("empleados", "cargos", "centros"));
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
        // $cargos = CargoModel::all();
        // $empleados = EmpleadosModel::all();
        // return view('admin.empleados', compact('centros', 'cargos', 'empleados'));
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
        $empleado = new EmpleadosModel();
        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->telefono_empleado = $request->telefono_empleado;
        $empleado->id_centro = $request->centro;
        $empleado->id_cargo = $request->cargo;
        $empleado->save();

        $centros = CentroModel::all();
        $cargos = CargoModel::all();
        $empleados = EmpleadosModel::all();
        return view('admin.empleados', compact('empleados', 'centros', 'cargos'));
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
        $empleado = EmpleadosModel::find($id);
        return view('admin.empleados', compact('empleado'));
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
        $cargos = CargoModel::all();
        $empleados = EmpleadosModel::find($id);
        return view('admin.editarEmpleados', compact('centros', 'cargos', 'empleados'));
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
        $empleado = EmpleadosModel::find($id);
        $empleado->nombre_empleado = $request->nombre_empleado;
        $empleado->telefono_empleado = $request->telefono_empleado;
        $empleado->id_centro = $request->centro;    
        $empleado->id_cargo = $request->cargo;
        $empleado->save();

        $empleados = EmpleadosModel::all();
        $cargos = CargoModel::all();
        $centros = CentroModel::all();
        return view('admin.empleados', compact('empleados', 'centros', 'cargos'));
        
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
        $empleado = EmpleadosModel::find($id);
        $empleado->delete();

        $empleados = EmpleadosModel::all();
        $cargos = CargoModel::all();
        $centros = CentroModel::all();
        return view('admin.empleados', compact('empleados', 'centros', 'cargos'));

    }
}

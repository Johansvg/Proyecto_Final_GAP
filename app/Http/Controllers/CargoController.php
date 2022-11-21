<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CargoModel;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cargos = CargoModel::all();
        return $cargos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('cargos.create');
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
        $cargo = new CargoModel();
        $cargo->nombre_cargo = $request->nombre;
        $cargo->descripcion_cargo = $request->descripcion;
        $cargo->save();

        $cargos = CargoModel::all();
        return $cargos;
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
        $cargo = CargoModel::find($id);
        return $cargo;
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
        // $cargo = CargoModel::find($id);
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
        $cargo = CargoModel::find($id);
        $cargo->nombre_cargo = $request->nombre;
        $cargo->descripcion_cargo = $request->descripcion;
        $cargo->save();

        $cargos = CargoModel::all();
        return $cargos;
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
        $cargo = CargoModel::find($id);
        $cargo->delete();

        $cargos = CargoModel::all();
        return $cargos;
    }
}

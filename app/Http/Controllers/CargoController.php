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
        return view("cargos", compact("cargos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cargos.create');
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
        $cargo->nombre_cargo = $request->nombre_cargo;
        $cargo->descripcion_cargo = $request->descripcion_cargo;
        $cargo->save();

        $cargos = CargoModel::all();
        return view("cargos", compact("cargos"));
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
        return view("cargos", compact("cargo"));
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
        $cargos = CargoModel::find($id);
        return view("editarCargos", compact("cargos"));
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
        $cargo->nombre_cargo = $request->nombre_cargo;
        $cargo->descripcion_cargo = $request->descripcion_cargo;
        $cargo->save();

        $cargos = CargoModel::all();
        return view("cargos", compact("cargos"));
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
        return view("cargos", compact("cargos"));
    }
}

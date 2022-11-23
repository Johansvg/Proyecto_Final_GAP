<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentroModel;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $centros = CentroModel::all();
        return $centros;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('centros.create');
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
        $centro = new CentroModel();
        $centro->nombre_centro = $request->nombre;
        $centro->direccion_centro = $request->direccion;
        $centro->save();

        $centros = CentroModel::all();
        return $centros;
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
        $centro = CentroModel::find($id);
        return $centro;
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
        return view('centros.edit');
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
        $centro = CentroModel::find($id);
        $centro->nombre_centro = $request->nombre;
        $centro->direccion_centro = $request->direccion;
        $centro->save();

        $centros = CentroModel::all();
        return $centros;
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
        $centro = CentroModel::find($id);
        $centro->delete();
        
        $centro = CentroModel::all();
        return $centro;
    }
}

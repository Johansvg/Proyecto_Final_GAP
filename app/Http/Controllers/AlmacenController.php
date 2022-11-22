<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlmacenModel;
use App\Models\ProductoModel;
use App\Models\CentroModel;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $almacen = AlmacenModel::all();
        return $almacen;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $productos = ProductoModel::all();
        // $centros = CentroModel::all();
        // return view('almacen.create', compact('productos', 'centros'));
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
        $almacen = new AlmacenModel();
        $almacen->id_producto = $request->id_producto;
        $almacen->descripcion_almacen = $request->descripcion_almacen;
        $almacen->id_centro = $request->id_centro;
        $almacen->id_producto = $request->id_producto;
        $almacen->save();
        
        $almacen = AlmacenModel::all();
        return $almacen;
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
        $almacen = AlmacenModel::find($id);
        return $almacen;
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
        // $productos = ProductoModel::all();
        // $centros = CentroModel::all();
        // return view('almacen.edit', compact('productos', 'centros'));
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
        $almacen = AlmacenModel::find($id);
        $almacen->descripcion_almacen = $request->descripcion_almacen;
        $almacen->id_centro = $request->id_centro;
        $almacen->id_producto = $request->id_producto;
        $almacen->save();

        $almacen = AlmacenModel::all();
        return $almacen;
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
        $almacen = AlmacenModel::find($id);
        $almacen->delete();

        $almacen = AlmacenModel::all();
        return $almacen;
    }
}

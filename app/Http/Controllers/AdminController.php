<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $administrador = AdminModel::all();
        return view('AdminGeneral.index', compact('administrador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('AdminGeneral.create');
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
        $administrador = new AdminModel();
        $administrador->nombre_administrador = $request->nombre_administrador;
        $administrador->telefono_administrador = $request->telefono_administrador;
        $administrador->correo_administrador = $request->correo_administrador;
        $administrador->contrasena_administrador = $request->contrasena_administrador;
        $administrador->save();

        $administrador = AdminModel::all();
        return view('AdminGeneral.index', compact('administrador'));
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
        // $administrador = AdminModel::find($id);
        // return view('AdminGeneral.show', compact('administrador'));
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
        // $administrador = AdminModel::find($id);
        // return view('AdminGeneral.edit', compact('administrador'));
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
        $administrador = AdminModel::find($id);
        $administrador->nombre_administrador = $request->nombre_administrador;
        $administrador->telefono_administrador = $request->telefono_administrador;
        $administrador->correo_administrador = $request->correo_administrador;
        $administrador->contrasena_administrador = $request->contrasena_administrador;
        $administrador->save();

        $administrador = AdminModel::all();
        return view('AdminGeneral.index', compact('administrador'));
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
        $administrador = AdminModel::find($id);
        $administrador->delete();

        $administrador = AdminModel::all();
        return view('AdminGeneral.index', compact('administrador'));
    }
}

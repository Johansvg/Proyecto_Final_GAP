<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaModel;
use App\Models\UsuarioModel;
use App\Models\ServiciosModel;
use App\Models\Model;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agenda = AgendaModel::all();
        return $agenda;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $usuarios = UsuarioModel::all();
        // $servicios = ServiciosModel::all();
        // return view('agenda.create', compact('usuarios', 'servicios'));
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
        $agenda = new AgendaModel();
        $agenda->fecha_agenda = $request->fecha_agenda;
        $agenda->hora_agenda = $request->hora_agenda;
        $agenda->id_usuario = $request->id_usuario;
        $agenda->id_servicio = $request->id_servicio;
        $agenda->save();

        $agenda = AgendaModel::all();
        return $agenda;
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
        $agenda = AgendaModel::find($id);
        return $agenda;
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
        // $usuarios = UsuarioModel::all();
        // $servicios = ServiciosModel::all();
        // return view('agenda.edit', compact('usuarios', 'servicios'));
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
        $agenda = AgendaModel::find($id);
        $agenda->fecha_agenda = $request->fecha_agenda;
        $agenda->hora_agenda = $request->hora_agenda;
        $agenda->id_usuario = $request->id_usuario;
        $agenda->id_servicio = $request->id_servicio;
        $agenda->save();

        $agenda = AgendaModel::all();
        return $agenda;
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
        $agenda = AgendaModel::find($id);
        $agenda->delete();

        $agenda = AgendaModel::all();
        return $agenda;
    }
}

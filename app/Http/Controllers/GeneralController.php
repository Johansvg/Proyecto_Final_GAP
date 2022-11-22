<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productoModelo;
use App\Models\ServiciosModel;
use App\Models\User;
use App\Models\AgendaModel;
use App\Models\AlmacenModel;
use App\Models\CentroModel;
use App\Models\CargoModel;
use App\Models\AdminModel;
use App\Models\PedidosModel;


class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = productoModelo::all();
        $servicios = ServiciosModel::all();
        $usuarios = User::all();
        $agenda = AgendaModel::all();
        $almacen = AlmacenModel::all();
        $centros = CentroModel::all();
        $cargos = CargoModel::all();
        $administrador = AdminModel::all();
        $pedidos = PedidosModel::all();

        return view('General.index', compact('productos', 'servicios', 'usuarios', 'agenda', 'almacen', 'centros', 'cargos', 'administrador', 'pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}

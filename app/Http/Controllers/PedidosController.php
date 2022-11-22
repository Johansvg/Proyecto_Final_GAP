<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidosModel;
use App\Models\User;
use App\Models\productoModelo;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = PedidosModel::all();
        return view('Pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::all();
        $productos = productoModelo::all();
        return view('Pedidos.create', compact('users', 'productos'));
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
        $pedidos = new PedidosModel();
        $pedidos->direccion_pedido = $request->direccion_pedido;
        $pedidos->fecha_pedido = $request->fecha_pedido;
        $pedidos->valor_total = $request->valor_total;
        $pedidos->id_usuario = $request->id_usuario;
        $pedidos->id_producto = $request->id_producto;
        $pedidos->save();

        $pedidos = PedidosModel::all();
        return view('Pedidos.index', compact('pedidos'));
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
        $pedidos = PedidosModel::find($id);
        $users = User::all();
        $productos = productoModelo::all();
        return view('Pedidos.edit', compact('pedidos', 'users', 'productos'));
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
        $pedidos = PedidosModel::find($id);
        $pedidos->direccion_pedido = $request->direccion_pedido;
        $pedidos->fecha_pedido = $request->fecha_pedido;
        $pedidos->valor_total = $request->valor_total;
        $pedidos->id_usuario = $request->id_usuario;
        $pedidos->id_producto = $request->id_producto;
        $pedidos->save();

        $pedidos = PedidosModel::all();
        return view('Pedidos.index', compact('pedidos'));

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
        $pedidos = PedidosModel::find($id);
        $pedidos->delete();

        $pedidos = PedidosModel::all();
        return view('Pedidos.index', compact('pedidos'));
    }
}

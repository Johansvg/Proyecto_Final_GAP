<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\productoModelo;
use App\Models\CargoModel;
use App\Models\CentroModel;
use App\Models\EmpleadosModel;
use App\Models\ServiciosModel;
use App\Models\AgendaModel;
use App\Models\AlmacenModel;
use App\Models\PedidosModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // crear administrador por defecto
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => '1234',
            'rol' => 'admin',
        ]);

        // crear usuario por defecto
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => '1234',
            'rol' => 'user',
        ]);

        // crear producto por defecto
        productoModelo::create([
            'nombre_producto' => 'Shampoo',
            'descripcion_producto' => 'Hair and body shampoo',
            'precio_producto' => 15000,
        ]);

        // crear cargo por defecto
        CargoModel::create([
            'nombre_cargo' => 'Administrador',
            'descripcion_cargo' => 'Cargo de administrador',
        ]);

        // crear centro por defecto
        CentroModel::create([
            'nombre_centro' => 'Centro 1',
            'direccion_centro' => 'calle 28 # 21-27',
        ]);

        // crear empleado por defecto
        EmpleadosModel::create([
            'nombre_empleado' => 'Juan',
            'telefono_empleado' => '123456789',
            'id_centro' => 1,
            'id_cargo' => 1,
        ]);

        // crear servicio por defecto
        ServiciosModel::create([
            'nombre_servicio' => 'Corte de cabello',
            'descripcion_servicio' => 'Corte de cabello',
            'tiempo_servicio' => '1 hora',
            'precio_servicio' => '15000',
            'id_centro' => 1,
            'id_empleado' => 1,
        ]);

        // crear agenda por defecto
        AgendaModel::create([
            'fecha_agenda' => '2021-10-10',
            'hora_agenda' => '10:00:00',
            'id_usuario' => 2,
            'id_servicio' => 1,
        ]);

        // crear almacen por defecto
        AlmacenModel::create([
            'descripcion_almacen' => 'Almacen 1',
            'id_centro' => 1,
            'id_producto' => 1,
        ]);

        // crear pedido por defecto
        PedidosModel::create([
            'direccion_pedido' => 'cra 10B # 4A-09',
            'fecha_pedido' => '2021-10-10',
            'valor_total' => '15000',
            'id_usuario' => 2,
            'id_producto' => 1,
        ]);
    }
}

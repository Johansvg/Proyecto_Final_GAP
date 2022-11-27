<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// importar admin controller
use App\Models\UserModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $administrador = new UserModel();
        $administrador->nombre_usuario = 'ejemplo';
        $administrador->telefono_usuario = '123456789';
        $administrador->email_usuario = 'ejemplo@gmail.com';
        $administrador->password_usuario = '1234';
        $administrador->rol = 'admin';

        $administrador->save();
    }
}

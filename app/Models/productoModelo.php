<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productoModelo extends Model
{
    use HasFactory;
    protected $table = 'productos'; // Nombre de la tabla
}

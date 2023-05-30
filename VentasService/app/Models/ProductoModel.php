<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $fillabel = [
        'nombre', 'descripcion', 'precio', 'id_categoria', 'id_proveedor'
    ];
}

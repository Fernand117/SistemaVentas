<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockModel extends Model
{
    use HasFactory;
    protected $table = "stock";
    protected $fillabel = [
        'id_producto', 'id_almacen', 'stock'
    ];
}

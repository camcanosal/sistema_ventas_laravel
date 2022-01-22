<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoVendido extends Model
{
    protected $table = "ventas";
    protected $fillable = ["id_venta", "descripcion", "codigo_barras", "precio", "cantidad"];
}

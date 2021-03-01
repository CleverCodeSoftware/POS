<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';
    protected $primaryKey='idproducto';
    public $timestamps=false;
    protected $fillable = [
        'idcategoria',
        'codigo',
        'nombre',
        'descripcion',
        'stock_total',
        'descripcion',
        'estado',
        'condicion'
    ];
    protected $guarded = [

    ];

}

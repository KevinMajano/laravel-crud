<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    protected $fillable = [
        'codigo',
        'descripcion',
        'cantidad',
        'precio',
    ];
    public $timestamps = false;

    use HasFactory;
}

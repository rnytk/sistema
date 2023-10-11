<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentt extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_uno',
        'apellido_uno',
        'dpi_uno',
        'nombre_dos',
        'apellido_dos',
        'dpi_dos'
    ];
}

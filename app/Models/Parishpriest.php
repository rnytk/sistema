<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parishpriest extends Model
{
    use HasFactory;

     protected $fillable = [
        'nombre',
        'apellido',
        'dpi',
        'estado'
    ];
}

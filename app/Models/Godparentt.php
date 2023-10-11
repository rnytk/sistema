<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Godparentt extends Model
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

    public function baptized(): HasMany {
        return $this->hasMany(Baptized::class);
    }
}

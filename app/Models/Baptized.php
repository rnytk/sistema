<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Baptized extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'lugar',
        'municipio',
        'departamento',
        'id_padrino',
        'id_padre',
        'id_celebrante'
    ];

    public function godparentt(): BelongsTo  {
        return $this->belongsTo(Godparentt::class, 'id_padrino');
    }

    public function parentt(){
        return $this->belongsTo(Parentt::class);
    }

    public function celebrant(){
        return $this->belongsTo(Celebrant::class);
    }

}

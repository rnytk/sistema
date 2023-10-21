<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_bautismo',
        'lugar_bautismo',
        'no_libro',
        'no_folio',
        'id_bautizado',
        
    ];

    public function baptized(){
        return$this->belongsTo(Baptized::class, 'id_bautizado');
    }
}

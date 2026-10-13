<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Detalle_Alquiler extends Model
{
    protected $table = 'detalle__alquilers';
    protected $primaryKey = 'id_detalle';
    protected $fillable = [
        'id_alquiler',
        'id_equipo',
        'cantidad',
        'precio_alquiler_dia'
    ];

    public function alquiler()
    {
        return $this->belongsTo(Alquiler::class, 'id_alquiler', 'id_alquiler');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo', 'id_equipo');
    }
}

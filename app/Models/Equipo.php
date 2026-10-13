<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $primaryKey = 'id_equipo';
    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'marca',
        'precio_alquiler_dia',
        'estado',
        'id_categoria'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }

    public function detalles()
    {
        return $this->hasMany(Detalle_Alquiler::class, 'id_equipo', 'id_equipo');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = 'alquileres';
    protected $primaryKey = 'id_alquiler';
    protected $fillable = [
        'id_cliente',
        'id_empleado',
        'fecha_solicitud',
        'fecha_inicio',
        'fecha_fin',
        'estado'
    ];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'id_cliente', 'id_cliente');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'id_empleado', 'id_empleado');
    }

    public function detalles()
    {
        return $this->hasMany(Detalle_Alquiler::class, 'id_alquiler', 'id_alquiler');
    }

}

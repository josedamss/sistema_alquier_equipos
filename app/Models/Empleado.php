<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable = [
        'codigo',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'cargo'
    ];

    public function alquileres()
    {
        return $this->hasMany(Alquiler::class, 'id_empleado', 'id_empleado');
    }
}

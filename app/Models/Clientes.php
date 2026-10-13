<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;


class Clientes extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'codigo',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'direccion'
    ];

    public function alquileres()
    {
        return $this->hasMany(Alquiler::class, 'id_cliente', 'id_cliente');
    }
}

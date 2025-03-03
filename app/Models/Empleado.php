<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{
    protected $fillable = [
        'oficina_id',
        'nombre',
        'apellido1',
        'apellido2',
        'rol',
        'fecha_nacimiento',
        'dni',
        'email',
    ];

    public function oficina(){
        return $this->belongsTo(Oficina::class);
    }
}

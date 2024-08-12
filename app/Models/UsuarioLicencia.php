<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioLicencia extends Model
{
    use HasFactory;

    protected $table = 'usuarioslicencias';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'usuario',
        'clave',
        'fecha_registro',
        'levely',
        'Num_folios'
    ];

    // Si el id no es incrementing o no es un integer, puedes configurarlo así:
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // protected $keyType = 'int';
}


<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarioslicencias';

    protected $fillable = [
        'nombre',
        'usuario',
        'clave',
        'levely',
        'Num_folios',
    ];

    public $timestamps = false; // Si no tienes las columnas created_at y updated_at
}

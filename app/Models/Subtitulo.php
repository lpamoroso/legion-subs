<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitulo extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $fillable = [
        'nombre',
        'descripcion',
        'cantidad_descargas',
        'created_at',
        'user_id'
    ];
}

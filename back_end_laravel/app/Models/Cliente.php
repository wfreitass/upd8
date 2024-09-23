<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $fillable = [
        'nome',
        'cpf',
        'dt_nascimento',
        'estado_id',
        'cidade_id',
        'sexo',
    ];
}

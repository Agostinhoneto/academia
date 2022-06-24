<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'cpf',
        'data_nascimento', 
        'sexo',
        'telefone',
        'cep',
        'status',
     ];
}

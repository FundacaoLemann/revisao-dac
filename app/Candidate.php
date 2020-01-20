<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'project_id',
        'nome',
        'telefone',
        'email',
        'rua',
        'numero',
        'compl',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'regiao',
        'link',
        'usuario',
        'instituicao',
        'cargo',
        'papel',
        'disponibilidade',
        'escolaridade',
        'curso',
        'escola_recente',
        'ano_conclusao',
        'bio',
        'retrosp',
        'fellow',
    ];
}

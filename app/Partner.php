<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'project_id',
        'nome',
        'link',
        'tipo',
        'inicio_mes',
        'inicio_ano',
    ];
}

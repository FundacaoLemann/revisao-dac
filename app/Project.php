<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $estados;

    public function __construct()
    {
        $this->estados = config("constants.estados");
    }

    public function reviewers()
    {
        return $this->belongsToMany('App\Reviewer');
    }

    public function getDepartamentoEstadoAttribute($value)
    {
        return $this->estados[$value];
    }
}

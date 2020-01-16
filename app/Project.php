<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

class Project extends Model
{

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('valido', function (Builder $builder) {
            $builder->where('valido', '=',  1);
        });
    }

    public function reviewers()
    {
        return $this->belongsToMany('App\Reviewer');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function candidates()
    {
        return $this->hasMany('App\Candidate');
    }

    public function partners()
    {
        return $this->hasMany('App\Partner');
    }

    public function getDepartamentoEstadoAttribute($value)
    {
        $estados = config("constants.estados");

        return $estados[$value];
    }

    public function getReviewersListAttribute()
    {
        return Arr::pluck($this->reviewers->toArray(), 'name');
    }

    public function addReview($data)
    {
        return $this->reviews()->create($data);
    }

}

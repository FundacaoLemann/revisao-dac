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

    public function getReviewersListAttribute()
    {
        return Arr::pluck($this->reviewers->toArray(), 'name');
    }

    public function getStatusAttribute()
    {

        $reviewers = $this->reviewers()->count();

        if($reviewers == 0)
            return 'aguardando_atribuicao';

        $reviews = $this->reviews()->count();

        if($reviewers == $reviews) {
            return 'revisado';
        } else {
            return 'aguardando_revisao';
        }

        return '-';

    }

    public function addReview($data)
    {
        return $this->reviews()->create($data);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    protected $appends = ['score_sum'];

    public function getScoreSumAttribute()
    {
        return collect([$this->relevance, $this->alignment, $this->viability, $this->innovation])->sum();
    }

    public function reviewer()
    {
        return $this->belongsTo('App\Reviewer');
    }

}

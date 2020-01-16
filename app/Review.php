<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    protected $appends = ['score_avg'];

    public function getScoreAvgAttribute()
    {
        return collect([$this->relevance, $this->alignment, $this->viability, $this->innovation])->avg();
    }
}

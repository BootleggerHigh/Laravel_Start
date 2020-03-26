<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dislike extends Model
{
    protected $fillable = ['disliktable_id','disliktable_type'];
    public function disliktable()
    {
        return $this->morphTo();
    }
}

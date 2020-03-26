<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['liktable_id','liktable_type'];
    public function liktable()
    {
        return $this->morphTo();
    }
}

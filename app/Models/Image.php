<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name', 'type_id'];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class,'liktable');
    }
    public function dislikes()
    {
        return $this->morphMany(Dislike::class,'disliktable');
    }

}

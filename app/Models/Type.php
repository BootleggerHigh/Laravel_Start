<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable =['name','place'];

    public function images()
    {
        return $this->hasMany(Image::class);
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

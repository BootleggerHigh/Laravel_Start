<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['task_id','status'];

    public function scopeGetStatusZero($query)
    {
        return $query->where('status',0)->orderBy('created_at')->orderBy('id');
    }
    public function scopeGetStatusOK($query)
    {
        return $query->where('status',1);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['message'];

    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }
}

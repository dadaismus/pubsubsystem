<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name', 'url'];
    
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}

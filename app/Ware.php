<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ware extends Model
{
    
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function getRouteKeyName()
    {
        return 'name';
        //return $this->getKeyName();
    }
}

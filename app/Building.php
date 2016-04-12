<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public function room()
    {
    	//returns $this->hasMany(Rooms::class);
    }
}

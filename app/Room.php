<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'description',
        'type',
        'capacity',
        'building'
    ];

    protected $table = 'rooms';

    protected $primaryKey = 'roomID';

    public function building()
    {
    	return $this->belongsTo(Building::class);
    }
}

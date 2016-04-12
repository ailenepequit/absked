<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'slots',
    ];

    protected $table = 'offerings';

    protected $primaryKey = 'offerNo';

}

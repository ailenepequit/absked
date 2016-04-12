<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   	protected $fillable = [
        'description',
    ];

    protected $table = 'subjects';

    protected $primaryKey = 'subjID';
}

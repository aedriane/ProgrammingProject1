<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = [
        'title', 'company', 'location', 'classification', 'workType','description'
    ];
}

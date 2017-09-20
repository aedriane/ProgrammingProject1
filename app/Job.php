<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'company', 'location', 'classification', 'description', 'workType'
    ];
}
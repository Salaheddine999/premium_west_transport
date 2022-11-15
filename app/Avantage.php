<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avantage extends Model
{
    protected $fillable = [
        'icon', 'title', 'description'
    ];
}

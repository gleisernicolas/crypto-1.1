<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $fillable = [
        'name', 'user_id', 'api_key','api_secret',
    ];


    public function getBallances(){


    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dawat extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }
}

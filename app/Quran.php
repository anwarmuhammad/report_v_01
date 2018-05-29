<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }
}

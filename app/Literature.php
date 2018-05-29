<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Literature extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrgWork extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }
}

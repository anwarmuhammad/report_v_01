<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone' ,'user_name','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function Quran(){

        return $this->hasMany(Quran::Class);

    }

    public function Hadith(){

        return $this->hasMany(Hadith::Class);

    }
    public function Literature(){

        return $this->hasMany(Literature::Class);

    }
    public function Study(){

        return $this->hasMany(Study::Class);

    }
    public function Salat(){

        return $this->hasMany(Salat::Class);

    }
    public function Dawat(){

        return $this->hasMany(Dawat::Class);

    }
    public function OrgWork(){

        return $this->hasMany(OrgWork::Class);

    }
    public function Contact(){

        return $this->hasMany(Contact::Class);

    }
    public function Report(){

        return $this->hasMany(Report::Class);

    }

    public function Distribution(){

        return $this->hasMany(Distribution::Class);

    }
    public function BaitulMaal(){

        return $this->hasMany(BaitulMaal::Class);

    }
    public function Misc(){

        return $this->hasMany(Miscellaneous::Class);

    }
    public function Role(){

        return $this->belongsTo(Role::class);

    }
    public function follows() {
        return $this->hasMany(follow::class);
    }
    public function isFollowing($target_id)
    {
        return (bool)$this->follows()->where('target_id', $target_id)->first(['id']);
    }
}

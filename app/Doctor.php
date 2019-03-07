<?php

namespace VirtualHealth;

use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticable
{
    use Notifiable;

    protected $fillable = [
        'firstname', 'lastname', 'username', 'about', 'dob', 'email', 'password', 'photo'
    ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function requests()
    {
        return $this->belongsToMany(User::class, 'requests', 'doctor_id', 'user_id');
    }

    public function sessions()
    {
        return $this->belongsToMany(User::class, 'sessions', 'doctor_id', 'user_id');
    }

    public function chats()
    {
        return $this->morphMany(Chat::class, 'chatable');
    }
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    
    public function recommendations()
    {
        return $this->hasMany(Recommendation::class);
    }

    public function subscribtions()
    {
        return $this->hasMany(Subscribtion::class);
    }

}

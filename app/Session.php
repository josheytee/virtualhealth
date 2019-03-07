<?php

namespace VirtualHealth;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['user_id', 'doctor_id'];

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}

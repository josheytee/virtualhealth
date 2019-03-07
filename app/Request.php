<?php

namespace VirtualHealth;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['user_id', 'doctor_id', 'active', 'time', 'expires'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}

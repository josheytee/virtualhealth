<?php

namespace VirtualHealth;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = ['name', 'description', 'photo'];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}

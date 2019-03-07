<?php

namespace VirtualHealth;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['doctor_id','title','discipline','school','year'];
}

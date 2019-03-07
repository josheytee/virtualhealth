<?php

namespace VirtualHealth;

use Illuminate\Database\Eloquent\Model;
use VirtualHealth\Events\BroadcastChat;

class Chat extends Model
{
    protected $fillable = ['session_id', 'type', 'data', 'read_at', 'chatable_id', 'chatable_type'];
    protected $events = [
        'created' => BroadcastChat::class
    ];

    public function getCreatedAtAttribute($value)
    {
        return ucfirst($value);
    }
    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function chatable()
    {
        return $this->morphTo();
    }
}

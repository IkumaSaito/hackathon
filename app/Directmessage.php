<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directmessage extends Model
{
    protected $fillable = ['content', 'user_id', 'receiver_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    
    protected $fillable = [
        'user_id', 'date', 'freetime',     
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

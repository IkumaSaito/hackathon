<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'name', 'password', 'hobby', 'job', 'language',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function directmessages()
    {
        return $this->hasMany(Directmessage::class);
    }
    
    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
    
}

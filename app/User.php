<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'users';
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'source',
        'comment'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
    }
}

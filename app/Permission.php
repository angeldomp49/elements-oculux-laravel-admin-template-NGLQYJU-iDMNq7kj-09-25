<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model{
    use HasFactory;

    protected $table='permissions';

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}

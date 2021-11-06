<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ContactType;

class Lead extends Model{
    use HasFactory, SoftDeletes;

    protected $table = 'leads';

    protected $fillable = [
        'name',
        'email',
        'last_name',
        'address',
        'country',
        'source'
    ];

    public function contacts(){
        return $this->hasMany(Contact::class);
    }

}

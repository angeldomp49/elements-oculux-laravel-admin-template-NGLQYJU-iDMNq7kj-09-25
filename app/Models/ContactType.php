<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
    use HasFactory;

    public const PHONE = 1;
    public const CELLPHONE = 2;
    public const FACEBOOK = 3;
    public const INSTAGRAM = 4;

    protected $fillable = [
        'name'
    ];

    public function contacts(){
        return $this->hasMany(Contact::class);
    }
}

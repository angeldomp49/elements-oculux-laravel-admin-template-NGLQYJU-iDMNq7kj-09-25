<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'user_id',
        'contact_type_id',
        'value'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function contactType(){
        return $this->belongsTo(ContactType::class);
    }
}

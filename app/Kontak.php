<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kontak extends Model
{
    //
   
    protected $table = 'kontak';
    public $fillable = [
        'name', 
        'email', 
        'phone', 
        'subject', 
        'message'
    ];
}

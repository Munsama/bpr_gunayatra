<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    //
    protected $table = 'tabungan';
 
    public $fillable = [
        'nama', 'alamat', 'telp', 'email', 'nominal', 'status'
    ];
    
    

}

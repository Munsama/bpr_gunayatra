<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    //
    protected $table = 'Investasi';
    public $fillable = [
        'nama', 'alamat', 'telp', 'email', 'nominal', 'status'
    ];
}

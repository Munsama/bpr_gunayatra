<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    //
    protected $table = 'deposito';
    public $fillable = [
        'nama', 'alamat', 'telp', 'email', 'nominal', 'status'
    ];
}

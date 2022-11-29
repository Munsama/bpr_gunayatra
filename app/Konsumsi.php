<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumsi extends Model
{
    //
    protected $table = 'konsumsi';
    public $fillable = [
        'nama', 'alamat', 'telp', 'email', 'nominal', 'status'
    ];
}

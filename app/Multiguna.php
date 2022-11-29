<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multiguna extends Model
{
    //
    protected $table = 'multiguna';
    public $fillable = [
        'nama', 'alamat', 'telp', 'email', 'nominal', 'status'
    ];
}

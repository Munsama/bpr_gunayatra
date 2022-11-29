<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModalKerja extends Model
{
    //
    protected $table = 'modal_kerja';
    public $fillable = [
        'nama', 'alamat', 'telp', 'email', 'nominal', 'status'
    ];
}

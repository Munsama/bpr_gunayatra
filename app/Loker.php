<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    //
    protected $table = 'loker';
    public $timestamps = false;
    public $fillable = [
        'tanggal', 'nama_pekerjaan', 'kualifikasi', 'objektif', 'keuntungan'
    ];
}

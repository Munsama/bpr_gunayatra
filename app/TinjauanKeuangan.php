<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinjauanKeuangan extends Model
{
    //
    protected $table = 'tinjauan_keuangan';
    public $timestamps = false;
    public $fillable = [
        'periode', 'asset', 'kredit', 'dpk', 'laba'
    ];
}

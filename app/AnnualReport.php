<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualReport extends Model
{
    //
    protected $table = 'annual_report';
    public $fillable = [
        'judul', 'gambar', 'dokumen'
    ];
}

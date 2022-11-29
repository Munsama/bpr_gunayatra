<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodCorporateGovernance extends Model
{
    //
    protected $table = 'good_corporate_governance';
    public $fillable = [
        'judul', 'gambar', 'dokumen'
    ];
}

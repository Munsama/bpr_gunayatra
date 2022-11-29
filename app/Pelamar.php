<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    //
    protected $table = 'pelamar';
 
    public $fillable = [
        'posisi', 'nama', 'alamat','tempat_lahir','tanggal_lahir', 'jenis_kelamin', 'email', 'hp', 'cv', 
        'ijazah', 'foto', 'skck', 'sertifikat'
    ];
}

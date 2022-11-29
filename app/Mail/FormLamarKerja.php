<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormLamarKerja extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public $user;

    public function __construct($data)
    {
        //
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('donotreply.bprgy@gmail.com')
        ->markdown('utama.email_loker')
        ->attachFromStorage('loker/'.$this->user['cv'])
        ->attachFromStorage('loker/'.$this->user['foto'])
        ->attachFromStorage('loker/'.$this->user['ijazah'])
        ->attachFromStorage('loker/'.$this->user['skck'])
        ->attachFromStorage('loker/'.$this->user['sertifikat'])
        ->with([
            'posisi' => $this->user['posisi'],
            'nama' => $this->user['nama'],
            'alamat' => $this->user['alamat'],
            'tempat_lahir' => $this->user['tempat_lahir'],
            'tanggal_lahir' => $this->user['tanggal_lahir'],
            'jenis_kelamin' => $this->user['jenis_kelamin'],
            'email' => $this->user['email'],
            'hp' => $this->user['hp']
            ]);
    }
}

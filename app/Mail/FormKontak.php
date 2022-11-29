<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormKontak extends Mailable
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
        ->markdown('utama.email_kontak')
        ->with([
            'name'      => $this->user['name'],
            'email'     => $this->user['email'],
            'phone'     => $this->user['phone'],
            'subject'   => $this->user['subject'],
            'message'   => $this->user['message']
            ]);
    }
}

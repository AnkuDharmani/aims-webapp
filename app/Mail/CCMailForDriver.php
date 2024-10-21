<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CCMailForDriver extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
       public function __construct(array $mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->subject('New Join Request')
                    ->view('emails.CC_mail')
                    ->with('mailData', $this->mailData);
    }
}
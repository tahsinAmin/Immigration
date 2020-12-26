<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FirstEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $emails;

    public function __construct($emails)
    {
        $this->emails = $emails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        // return $this->from("admin@programmingfields.com")->view('email-template');
        return $this->from("amin1996bangladesh@gmail.com")->view('email-template')->with('emails', $this->emails);

        // return $this->subject('Message from DreamC')
        //             ->view('email_template')
        //             ->with('emails', $this->emails);
    }
}

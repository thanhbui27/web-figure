<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThanksBuyProduct extends Mailable
{
    use Queueable, SerializesModels;
    public $Thanks;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Thanks)
    {
        $this->Thanks = $Thanks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from Figureshop') -> view('Mail.thanks');
       
    }
}

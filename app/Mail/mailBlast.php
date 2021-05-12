<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailBlast extends Mailable
{
    use Queueable, SerializesModels;
    public $attachment;
    public $col;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($attachment, $col)
    {
        // pasamos el att
        $this->attachment = $attachment;
        $this->data = $col;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $attachment = $this->attachment;
        $data = $this->data;
        $att = public_path() . "/storage/certs/" . $attachment;
        return $this->markdown('emails.mailblast', compact('data'))->attach($att);
    }
}

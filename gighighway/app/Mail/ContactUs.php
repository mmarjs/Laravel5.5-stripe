<?php

namespace GigHighway\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    public $email;

    public $message;

    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->message = $request->message;
        $this->subject = $request->subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact-us')
            ->from(config('mail.from.address'))
            ->subject('New GigHighway Website Inquiry');
    }
}

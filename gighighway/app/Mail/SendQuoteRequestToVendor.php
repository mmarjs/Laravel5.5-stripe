<?php

namespace GigHighway\Mail;

use GigHighway\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendQuoteRequestToVendor extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var QuoteRequest
     */
    public $quoteRequest;

    /**
     * Create a new message instance.
     *
     * @param QuoteRequest $quoteRequest
     */
    public function __construct(QuoteRequest $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.quotes.send-to-vendor')
            ->from(config('mail.from.address'))
            ->subject('New Quote Request from GigHighway');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WebCardMail extends Mailable
{
    use Queueable, SerializesModels;
    public $d;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */


    public function build()
    {
        return $this->view('emails.web_card_mail'); // Create a corresponding view file in resources/views/emails
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Web Card Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $name, public string $email, public string $body)
    {
        //
    }

    public function build()
    {
        return $this->subject('Mail from Portfolio')
                    ->replyTo($this->email)
                    ->view('emails.contact');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}

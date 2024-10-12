<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ManagerRegistrationPending extends Mailable
{
    use Queueable, SerializesModels;

    public $manager;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($manager)
    {
        $this->manager = $manager;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registration Pending Approval')
            ->view('emails.manager_registration_pending');
    }
}

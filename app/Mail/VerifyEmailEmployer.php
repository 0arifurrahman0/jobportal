<?php

namespace App\Mail;

use App\Employer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyEmailEmployer extends Mailable
{
    use Queueable, SerializesModels;

    public $employer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Employer $employer)
    {
        $this->employer = $employer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.verifyemployer')->with('employer', $this->employer);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
// app/Mail/VerificationMail.php



class VerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function build()
    {
        return $this->subject('Email Verification')->view('emails.verification', ['otp' => $this->otp]);
    }
}

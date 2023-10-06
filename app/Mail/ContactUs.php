<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $fname;
    public $lname;
    public $email;
    public $subject;
    public $information;
    public function __construct($fname , $lname, $email, $subject, $information)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->subject = $subject;
        $this->information = $information;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->view('mail.contactus');
    }
}

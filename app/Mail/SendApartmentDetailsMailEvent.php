<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendApartmentDetailsMailEvent extends Mailable
{
    public $apartmentDetails;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($apartmentDetails)
    {
        $this->apartmentDetails = $apartmentDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@Propriodirect.org', 'no-replay')
            ->to('islamkabbary@gmail.com')
            ->subject('New Details')
            ->view('web.emails.mail_details', ['apartmentDetails' => $this->apartmentDetails]);
    }
}

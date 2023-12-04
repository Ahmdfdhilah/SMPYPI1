<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data from the form submission.
     *
     * @var array
     */
    public $formData;

    /**
     * Create a new message instance.
     *
     * @param array $formData
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('smpypi1br@gmail.com', 'admin')->subject($this->formData['type'] . ' dari pengunjung website')
            ->to('smpypi1br@gmail.com', 'Your mail')
            ->view('emails.contact_form_mail')
            ->with([
                'data' => $this->formData
            ]);
    }
}
